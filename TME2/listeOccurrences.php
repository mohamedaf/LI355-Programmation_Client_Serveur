<?php
    include 'tableau_en_table.php';
    
    define('TEST_SECUSOC', '12345678901234 02345678901234 123456789012345') ;
    define('TEST_HORAIRES', "12:34, 05:18 et 23:14 et ensuite une heure erronée 77:17") ;
    define('TEST_MAILETU', "l’elu@etu.upmc.fr saint-eloi@etu.upmc.fr faux@etu_umpc_fr") ;
    define('TEST_NOTE', "20, 18/20 et 7/20 7.5") ;
    
    function listeOccurences($expr,$chaine){
        
        if(preg_match_all($expr,$chaine,$r)){
            return table_en_table($r[0],$expr);
        }
        else{
            return "La chaine ne correspond pas au motif !!\n";
        }
    }
    
    echo listeOccurences('/^[12](\d){13}/',TEST_SECUSOC);
    echo "</br></br>";
    echo listeOccurences('/([0-1][0-9]|2[0-3]):[0-5][0-9]/',TEST_HORAIRES);
    echo "</br></br>";
    echo listeOccurences('/\b[a-z]+(-[a-z]+)?@etu.upmc.fr\b/',TEST_MAILETU);          #problème au niveau de l'exemple avec l'apostrophe
    echo "</br></br>";
    echo listeOccurences('/(^|\s)(20|((1)*[1-9]))(\/20)?[^\.]/',TEST_NOTE);
    echo "</br></br>";
?>
