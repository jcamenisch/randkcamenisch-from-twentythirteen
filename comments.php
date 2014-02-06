<? if ( post_password_required() || !comments_open() ) return; ?>

<div id="disqus_thread"></div>
<script type="text/javascript">
  var disqus_shortname = 'kaycamenisch';
  var disqus_identifier = '<?= the_date("Y-m-d") ?>-<?= basename(get_permalink()) ?>';
  var disqus_url = '<?= get_permalink() ?>';

  /* * * DON'T EDIT BELOW THIS LINE * * */
  (function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>
  Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
</noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
