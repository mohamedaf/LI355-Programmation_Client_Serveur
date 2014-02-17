<?php

    function memorise_cookie(){
        if(isset($_COOKIE['value'])){
           $f = fopen($_COOKIE['value'],"r"); 
           $N = fread($f,1024);
           fclose($f);
        }
        else{
            
        }
    }

?>
