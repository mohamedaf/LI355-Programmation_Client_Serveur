<?php
  include('array.php');
  
  $fruit = array("banane","pomme","litchie");
  
  asort($fruit);
  
  echo array_to_list($fruit);

?>