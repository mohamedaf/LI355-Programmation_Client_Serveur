<?php
    error_reporting(E_ALL);

    function table_en_table($tab, $legende, $resume="", $w=100){
        if(!$tab) return '';
        
        $chaine = '<table width:'. $w .' summary='. $resume .'>'."\n";
        $chaine .= '<caption style="background-color:#aaa;">'. $legende .'</caption>'."\n";
        $chaine .= '<tr style="background-color:#777;"> <th>Index</th> <th>Valeurs</th> </tr>'."\n";
        
        $pair = 1;
        
        foreach($tab as $cle => $elem){
            if($pair){
                $chaine = $chaine . '<tr style="background-color:#ddd;"> <td>'. $cle .'</td> <td>'. $elem .'</td> </tr>'."\n";
                $pair = 0;
            }
            else{
                $chaine = $chaine . '<tr style="background-color:#eee;"> <td>'. $cle .'</td> <td>'. $elem .'</td> </tr>'."\n";
                $pair = 1;
            }
        }
        
        return $chaine;
    }

    #$tab = array("2*1" => "2","2*2" => "4","2*3" => "6","2*4" => "8", "2*5" => "10", "2*6" => "12", "2*7" => "14", "2*8" => "16", "2*9" => "18", "2*10" => "20");

    #echo table_en_table($tab,"Table de 2","Table de multiplication de 2");
?>
