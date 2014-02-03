<?php
    #include('entete.php');
    #entete('Inscrire Etudiant');
    include('entrerNotes.php');
    
    function valeursGet(){
        $val = array();
        
        $val['NoGroupe'] = htmlspecialchars($_GET['NoGroupe']);   #en utilisant $_GET
        
        foreach($_GET['nom[]'] as $k => $v){
            $val[$k] = htmlspecialchars($v);
        }
        
        return $val;
    }
    
    function valeursServer(){
        $val2 = array();
        
        $chaine = $_SERVER[’QUERY_STRING’]; #en utilisant $_SERVER[’QUERY_STRING’]
    
        preg_match_all('/\&(.+)=([^\&]*)/',$chaine,$r);
        $val2[$r[1]] = htmlspecialchars($r[2]);
        
        return $val2;
    }

    $reenvoyer = 0;
    
    $champs = valeursGet();
    
    foreach($champs['nom[]'] as $v){
        if (!$v) {
            $reenvoyer = 1;
        } 
    }
      
    if($reevoyer){
        $notes = array("toto","titi","tata");
        form2($notes);
        echo "Erreur un ou plusieurs champs sont vides !!";
    }
    
    echo "</body></html>\n";
?>