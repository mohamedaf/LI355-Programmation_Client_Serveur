<?php
  function array_to_list($tab){
    $chaine = "";
    foreach($tab as $v)
        $chaine .= "<li>$v</li>\n";
    return $chaine ? "<ol>$chaine</ol>\n" : '';
  }
  
  function array_to_table($tab){
    if (!$tab) return '';
    $chaine = "";
      foreach($tab as $k => $v)
        $chaine .= "<tr>\n<td>$k</td>\n<td>$v</td>\n</tr>\n";
    $th = "<tr>\n<td>Index</td>\n<td>Valeur</td>\n</tr>\n";
    return "<table>\n<caption>Table</caption$th$chaine</table>\n";
  }
?>
