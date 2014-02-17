<?php
    #include('entete.php');
    #entete('naviguer.php');
    
    #echo "<body>\n";

    function naviguer($articles,$numpage,$nbm=1,$info=''){
        
        $cpt = 1;
        foreach($articles as $k => $v){
            if($numpage > count($articles)){
                $index = 1;
                break;
            }
                
            if($numpage == $cpt) $index = $k;
            $cpt++;
        }
        
        
        echo "<form method='post' action'' style='width:15%;'> <fieldset>\n";
        
        $pageprec = $numpage-1;
        $pagesuiv = $numpage+1;
        $prix = $articles[$index]*$nbm;
        
        if($numpage > 1){ 
          echo "<input type='submit' name='page' value = $pageprec style='float:left;'>\n";
        }
        
        if($numpage < count($articles)){
          echo "<input type='submit' name='page' value = $pagesuiv style='float:right;'> </fieldset>\n";
        }
        
        echo "<fieldset><input type='submit' name='page' value = $prix> </fieldset></form>\n";
    }
    
    #naviguer(array('Londres' => 100, 'Madrid' => 200 , 'Berlin' => 300),2);
    
    #echo "</body></html>";
?>
