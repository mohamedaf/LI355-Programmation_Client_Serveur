<?php
    include('entete.php');
    include('array.php');
    entete('get_entetes.php');
    $repeter = 1;
    define('DECOMPOSE','/(https?):\/{2}([^:]+):(.*)\/(.+)/');
    
    function get_entetes($server,$port,$chemin=''){
        $tab = array();
        $f = fsockopen($server,$port);
        
        if(!$f) return "Erreur de connexion !!";

        fputs($f,'GET http://'.$server.'/'.$chemin.' HTTP/1.1\n');
        fputs($f,'Host: '.$server.'\n\n');
      
        $tab['code'] = fgets($f);
        
        while(!feof($f)){
            $l = fgets($f);
            echo "aaaaaaaaaaaaaa\n";    #pour essayer de debuguer
            echo "$l\n";
          
            if(preg_match('//',$l)) break;   

            $ent= split(':', $l);
            $tab[$ent[0]] = $ent[1];
        }
        
        fclose($f);
        
        return $tab;
    }
    
    function valeursServer(){
        $val2 = array();
        
        $chaine = $_SERVER[’QUERY_STRING’]; #en utilisant $_SERVER[’QUERY_STRING’]
    
        preg_match_all('/\&(.+)=([^\&]*)/',$chaine,$r);
        $val2[$r[1]] = htmlspecialchars($r[2]);
        
        return $val2;
    }
    
    if(isset($_GET['url'])){
        $chaine = $_SERVER['QUERY_STRING'];
        preg_match_all(DECOMPOSE,$chaine,$r);
        $res = array();
        
        if(preg_match('//',$r[3])) $res = get_entetes($r[2],$r[3],$r[4]);
        else{
            if(preg_match('/http/',$r[1])) $res = get_entetes($r[2],80,$r[4]);
            else if(preg_match('/https/',$r[1])) $res = get_entetes($r[2],443,$r[4]);
        }
        
        echo array_to_table($res);
        $repeter = 0;
    }
    
    if($repeter){
        echo "<form method='get' action=''>","<fieldset>";
        echo "<label for='url'>URL: </label>";
        echo "<input name='url' id='url'/>";
        echo "<input type='submit' />";
        echo "</fieldset></form>"; 
    }    
    
    echo "</body></html>";
?>
