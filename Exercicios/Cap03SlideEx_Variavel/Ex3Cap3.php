<?php
function formatardata($data)
{
    $data1 = new DateTime($data);
    $meses = array(
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro'
    );

    $dia=$data1->format('d');
    $ano=$data1->format('Y');
    $mes=$meses[intval($data1->format('m'))];
    return "Ipatinga, $dia de $mes de $ano";
}
    $data='2015-02-01';
    echo formatardata($data);
?>