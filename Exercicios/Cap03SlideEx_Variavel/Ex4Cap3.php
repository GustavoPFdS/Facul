<?php
function Primo($numero)
{
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}
$numero = 2147483647;

if (Primo($numero)) {
    echo "$numero é primo.";
} else {
    echo "$numero não é primo.";
}
?>