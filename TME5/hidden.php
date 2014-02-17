<?php
    include('entete.php');
    include('naviguer.php');
    
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
        entete($page);
    } else {
        $page = 1;
        entete($page);
    }

    echo "<body>\n";
    echo "<h1>$page</h1>\n";
    
    $articles = array('Londres' => 100, 'Madrid' => 200 , 'Berlin' => 300);
    
    if(isset($_POST['visites'])){
        $nbvis = $_POST['visites'] + 1;
    }
    else{
        $nbvis = 1;
    }
    
    if(is_numeric($page) and $page <= count($articles)){
        naviguer($articles,$page,$nbvis);
        echo "visites : $nbvis\n";
    }
    else echo "Bon voyage pour $page€\n";
    
    echo "</body></html>\n";    
?>
