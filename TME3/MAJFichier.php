<?php
    
    function tabFromFich($nomfic){
        $tab = array();
        
        /*Ouverture du fichier en lecture seule*/
        $handle = fopen($nomfic, 'r');
        /*Si on a réussi à ouvrir le fichier*/
        if ($handle)
        {
            /*Tant que l'on est pas à la fin du fichier*/
            while (!feof($handle))
            {
                /*On lit la ligne courante*/
                $chaine = fgets($handle);
                
                if(preg_match_all('/^(\d+)\s(\d+)$/',$chaine,$r)){
                    $tab[$r[1]] = $r[2];
                }
                else echo "fonction tabFromFich, erreur dans le contenu du fichier!!!</br>\n";
            }
            /*On ferme le fichier*/
            fclose($handle);
        }
        
        return $tab;
    }
    
    function TDdeEtudiant($nomfic,$numetu){
        
        /*Ouverture du fichier en lecture seule*/
        $handle = fopen($nomfic, 'r');
        /*Si on a réussi à ouvrir le fichier*/
        if ($handle)
        {
            /*Tant que l'on est pas à la fin du fichier*/
            while (!feof($handle))
            {
                /*On lit la ligne courante*/
                $chaine = fgets($handle);
                
                if(preg_match_all('/^(\d+)\s(\d+)$/',$chaine,$r)){
                    if($r[1] === $numetu) return $r[2];
                }
                else echo "fonction TDdeEtudiant, erreur dans le contenu du fichier!!!</br>\n";
            }
            /*On ferme le fichier*/
            fclose($handle);
        }
        
        return 0;
    }
    
    function ajoutEnFinFile($nomfic,$numetu,$numTD){
        
        if( !($handle = fopen($nomfic, 'a')) ) return;
        fprintf( $handle , ''.$numetu.' '.$numTD."\n");
    }

?>