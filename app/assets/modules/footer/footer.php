<?php 
  include_once './skins/default/footer/footer.tpl'; 

  echo 'copyright: ';
  $date = getdate();
  echo Core::$YEAR.' - '.$date['year'];

?>