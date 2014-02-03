<?php
    include('entete.php');
    entete('Formulaire Etudiants');
    
    define('Groupemax','10');
    define('Notemax','20');
    $repeter = 1;
    
    function form1(){
        echo "<form method='get' action=''>","<fieldset>";
        echo "<label for='NoGroupe'>Numero Groupe: </label>";
        echo "<input name='NoGroupe' id='NoGroupe'/>";
        echo "<input type='submit' />";
        echo "</fieldset></form>";
    }
    
    function form2($notes){
        echo "<form method='post' action=''>","<fieldset>";
        
        foreach($notes as $k => $v){
            echo "<label for='n$k'>$v: </label>";    #n$k car $k chiffre et le id doit forcément commencer par une lettre
            echo "<input name='nom[]' id='n$k'/>";
        }
        echo "<input type='submit' />";
        echo "</fieldset></form>";
    }
    
    if(isset($_GET['NoGroupe'])){
        if(!$_GET['NoGroupe']){
            echo "Vous n'avez rien saisie !!";
        }
        else if ($_GET['NoGroupe'] > Groupemax) {
            echo "Chiffre insere trop grand ! donnez un chiffre inferieur a 10!";
        } else {
            $repeter = 0;
        }
    }
    
    if($repeter){
        form1();
    }
    else{
        $notes = array("toto","titi","tata");
        form2($notes);
    }
    
    #echo "</body></html>\n";
?>