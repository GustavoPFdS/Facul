<?php
    function primeironomelexicografico($nomes){
        sort($nomes);
        return $nomes[0];
    }

    $nomes= array('Joçé', 'Maria', "Xinando", "Zuando", "Tadeu");
    echo primeironomelexicografico($nomes);
?>