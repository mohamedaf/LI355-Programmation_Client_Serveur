<?php
    function message_erreur($s,$IP,$mois=date("M")){
        if(preg_match_all("/\[(.)+$mois(.)+(..:..:..)(.)+\]\[(.)+\]\[$IP\]((.)+)/",$s,$r)){
            return table_en_table(array($r[3] => $r[6]), $IP . ' ' . $mois);
        }
        else{
            return "Aucune erreur de la sorte !!\n";
        }
    }
?>