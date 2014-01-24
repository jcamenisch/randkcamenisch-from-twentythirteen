/* 
  TODO:
  * Consider integrating ideas from http://www.pengoworks.com/workshop/jquery/calculation/calculation.plugin.htm
  * Improve pub sub model to reduce unnecessary repetition of calculations.
*/

(function($) {
  /* Note: This extra function on the $.fn namespace is a no-no, but I couldn't resist 
     providing myself some syntax sugar. */
  /* TODO: Consider replacing this with dependency on field plugin */
  $.fn.effectiveValue = function() {
    return this.is(':checked,:text') ?
      this.val() :
      this.val().search(/^\s*[1-9]\d*\s*$/) ?
        0 :
        this.val().search(/^yes|true$/i) ?
          false :
          '';
  };

  calculations = {
    subscribe: function(subscribers,inputs) {
      inputs = $(inputs)
      subscribers.data('inputs', inputs);
      inputs.each(function() {
        $(this).data('subscribers', $(this).data('subscribers') ? $(this).data('subscribers').add(subscribers) : $(subscribers));
      });
    },
    pullSubscription: function() {
      var receiver = $(this);
      var settings = receiver.data('settings');
      var inputs = receiver.data('inputs');
      if (inputs.length > 1) {
        if ('aggregation' in settings)
          newValue = calculations.aggregations.apply(settings.aggregation, inputs);
        else
          inputs = inputs.filter(':checked,:text')
      } else if (inputs.length == 1)
        newValue = inputs.effectiveValue();
      else
        newValue = 0;
      if ('filter' in settings)
        newValue = calculations.filters[settings.filter](newValue);
      if ('state' in settings)
        settings.state.func($(this), calculations.evaluateArgs(newValue, settings.state.args))
      else
        if (receiver.is('input'))
          receiver.val(newValue);
        else
          receiver.html(newValue);
    },
    evaluateArgs: function(value, args) {
      var argsCopy = args.slice(0);
      if (argsCopy.shift() == 'if')
        return this.evaluateIf(value, argsCopy);
    },
    evaluateIf: function(value, args){
      var isTrue = function (value, args) {
        return calculations.saysTrue(value);
      }
      var conditions = {
        'true': isTrue,
        checked: isTrue,
        'false': function(value, args) { return !isTrue(value, args) },
        gt: function(value, args){ return value > args[0]; },
        gte: function(value, args){ return value >= args[0]; },
        lt: function(value, args){ return value < args[0]; },
        lte: function(value, args){ return value <= args[0]; },
        between: function(value, args){ return args[0] <= value && value <= args[1]; },
        otherwise: function(value, args) {
          if (args.length > 0)
            return value == args[0];
          else
            return isTrue(a);
        }    
      };
      if (args[0] in conditions) {
        return conditions[args.shift()](value, args);
      } else
        return conditions['otherwise'](value, args);
    },
    stateSetters: {
      visible: function(target, state){
        if (state)
          target.show();
        else
          target.hide();
      }
    },
    aggregations: {
      apply: function(aggregationKey, elements){
        if (aggregationKey in calculations.aggregations) {
          var aggregation = calculations.aggregations[aggregationKey];
          return elements
            .map(aggregation.map).get()
            .reduce(aggregation.reduce);
        } else alert ('can\'t find aggregation "'+aggregationKey+'"')
      },
      sum: {
        map: function(a,b) { return +$(this).effectiveValue(); },
        reduce: function(a,b) { return a + b }
      },
      max: {
        map: function(a,b) { return +$(this).effectiveValue(); },
        reduce: function(a,b) { return Math.max(a, b) }
      },
      all: {
        map: function(a,b) { return calculations.saysTrue($(this).effectiveValue()); },
        reduce: function(a,b) { return a && b }
      },
      any: {
        map: function(a,b) { return calculations.saysTrue($(this).effectiveValue()); },
        reduce: function(a,b) { return a || b }
      },
      anychecked: {
        map: function(a,b) { return $(this).is(':checked'); },
        reduce: function(a,b) { return a || b }
      }
    },
    filters: {
      negative: function(input){ return -input; }
    },
    saysTrue: function (something){
      return typeof something != 'undefined' && !(something+"").match(/^(0|false|no)?$/i);
    }
  }

  $.fn.CalculatedAttributes = function(){
    this.find('input').each(function(){
      $(this).change(function(){
        if (typeof $(this).data('subscribers') === 'object') {
          $(this).data('subscribers').each(function(){
            $(this).change();
          });
        }
      });
    });
    this.find('.subscribe')
      .change(calculations.pullSubscription)
      .each(function(){
        var classes = $(this).attr('class').split(' ');
        var settings = {};
        for (i in classes) {
          if (classes[i] !== 'subscribe') {
            words = classes[i].split('-');
            firstWord = words.shift();
            if (firstWord === 'to') {
              if (words[0] in calculations.aggregations) {
                settings.aggregation = words.shift();
              }
              var inputClass = words.join('-')
              settings.inputSelector = 'input#'+inputClass+',#'+inputClass+' input,input.'+inputClass+',.'+inputClass+' input';
            } else if (firstWord in calculations.stateSetters) {
              settings.state = {
                func: calculations.stateSetters[firstWord],
                args: words
              };
            } else if (firstWord in calculations.filters) {
              settings.filter = classes[i];
            }
          } 
        }
        if ('inputSelector' in settings) {
          $(this).data('settings', settings);
          calculations.subscribe($(this),$(this).data('settings').inputSelector);
        }
      })
      .change();
    return this;
  }

})(jQuery);