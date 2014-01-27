<?php    
    include 'entete.php';
    
    echo entete('date');
    
    echo "<body>\n<h1>";
    
    echo 'Bonjour ! Nous sommes le ' . date('d') . '/' . date('m') . '/' . date('Y') . ' et il est ' . date('H'). ' h ' . date('i');
    
    echo "</h1>\n</body>\n</html>";
?>

