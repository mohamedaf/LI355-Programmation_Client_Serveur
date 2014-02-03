<?php
  include('array.php');
    
  $fruit = array("banane" => "130","pomme" => "300","litchie" => "30");
  
  asort($fruit);
  
  echo array_to_table($fruit);

?>