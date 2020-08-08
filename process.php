<?php
    $color = $_POST['color'];
    $styleBlock = sprintf('
    <style type="text/css">
       body {
         background-color:%s
       }
    </style>
  ', $color);
  echo $styleBlock;

?>