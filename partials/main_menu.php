<ul><? /* <r:children:each> */ ?>
  <? /* <r:if_content part="main-menu"> */ ?><li<? /* <r:if_ancestor_or_self> */ ?> class="here"<? /* </r:if_ancestor_or_self> */ ?>>
    <a<? /* <r:unless_self> */ ?> href="<? /* <r:url /> */ ?>"<? /* </r:unless_self> */ ?>><? /* <r:breadcrumb /> */ ?></a>
    <? /* <r:if_children> */ ?>
      <? /* <r:snippet name="main-menu" /> */ ?>
    <? /* </r:if_children> */ ?>
  </li><? /* </r:if_content> */ ?>
<? /* </r:children:each> */ ?></ul>
