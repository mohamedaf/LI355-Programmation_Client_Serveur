<?php

    include('entete.php');
    include('naviguer.php');
    
    if(isset($_COOKIE['visites'])){
        $nbvis = $_COOKIE['visites'] + 1;
    }
    else{
        $nbvis = 1;  
    }
    
    setcookie('visites',$nbvis);
    
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
    } else {
        $page = 1;
    }
    
    $articles = array('Londres' => 100, 'Madrid' => 200 , 'Berlin' => 300);
    
    if(!(is_numeric($page) and $page <= count($articles))){
       setcookie('visites','0'); 
    }
    
    entete('cookvisites.php');
    
    echo "<body>\n";
    
    entete($page);

    echo "<body>\n";
    echo "<h1>$page</h1>\n";
    
    if(is_numeric($page) and $page <= count($articles)){
        naviguer($articles,$page,$nbvis);
        echo "visites : $nbvis\n";
    }
    else{
       echo "Bon voyage pour $page euros\n";
    }
    
    echo "</body></html>";

?>
