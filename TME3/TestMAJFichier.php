<?php
    include('entete.php');
    include('MAJFichier.php');
    entete('TestMAJFichier');
    
    $f = fopen('test.txt', 'w');  //ecraser le contenu du fichier avant de commencer
    fclose($f);
    
    for($i=0; $i<30; $i++){
        ajoutEnFinFile('test.txt',rand (1000000 , 9999999),rand (1 , 10));
    }
    
    $tab = tabFromFich('test.txt');
    
    foreach($tab as $k => $v){
        echo "Numero Etudiant : $k, Numero TD : $v\n</br>";
    }
    
    echo"</body></html>";
?>