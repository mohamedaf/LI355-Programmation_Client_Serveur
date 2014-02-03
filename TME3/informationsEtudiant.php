<?php
    include('entete.php');
    entete('Informations Etudiant');

    function formulaireSoumission(){
        echo "<form method='post' action=''>","<fieldset>";
        
        echo "<label for='NumEtu'>Numero Etudiant: </label>";
        echo "<input name='NumEtu' id='NumEtu' />";
        echo "<label for='mail'>mail: </label>";
        echo "<input name='mail' id='mail' />";
        
        echo "<label for='f1'>Fichier a soumettre: </label>";
        echo "<input type='checkbox' name='f[]' id='f1' />";
        echo "<label for='f2'>Fichier a envoyer par mail: </label>";
        echo "<input type='checkbox' name='f[]' id='f2' />";
        
        echo "<input type='submit' />";
        echo "</fieldset></form>";
    }
    
    function valeursPost(){
        $val = array();
        
        $val['NumEtu'] = htmlspecialchars($_POST['NumEtu']);   #en utilisant $_POST
        $val['mail'] = htmlspecialchars($_POST['mail']);
        
        foreach($_POST['f[]'] as $k => $v){
            $val[$k] = htmlspecialchars($v);
        }
        
        return $val;
    }
    
    $repeter = 1;
    
    if(isset($_POST['NumEtu'])){     //afin de ne pas rentrer la 1 ere fois
        $res = valeursPost();
        
        $repeter = 0;
        
        foreach($res as $v){
            if(!$v) $repeter = 1;
        }
    }
    
    if($repeter) formulaireSoumission();
    
    echo "</body></html>";
?>