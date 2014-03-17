<?php
    error_reporting(E_ALL);
    init_set('display_errors',1);

    function entete($titre,$tab){
        $chaine = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>\n";

        $chaine .= '<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">'."\n";
        $chaine .= "<head>\n<meta http-equiv='Content-Type' content='text/html charset=utf-8' />\n";
        $chaine .= '<title>'. $titre .'</title>'."\n";
        

        $links = '';
        
        foreach($tab as $vl){
            $atts = '';
            foreach($vl as $k => $v){
                $atts .= " $k=$v ";
            }         
            $links .= "<link $atts />\n";
        }
        
        return ($chaine .= $links."\n</head>\n");        
    }
?>
