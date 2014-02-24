<?php
    include('rectangle.php');

    function rectangles($tables,$largeur,$hauteur){
         header("Content-Type: image/svg+xml");
         echo "<!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>\n";
         echo "<svg width='$largeur' height='$hauteur' xmlns='http://www.w3.org/2000/svg'>\n";
         
         $res = rectangle($tables);
         
         echo "<g transform='translate(10,10),scale(1,-1)'>\n";
         echo join("\n",$res);
         echo "</g></svg>";
    }
    
    $tab = array(array(array('style' => 'background-color: red','colspan' => 1,'contenu' => 2)));
    
    rectangles($tab,"800","500");

?>
