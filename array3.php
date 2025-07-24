<?php 

$murid = [];

$murid[] = 'Ali';
$murid[] = 'Abu';
$murid[] = 'Aliyah';
$murid[] = 'Amira';


echo $murid[0] . ' + ' . $murid[1] . ' (' . $murid[2] . ' + ' . $murid[3] . ') ';
echo "<br> ------------ </br>";


echo $murid[0] .' '."dan".' '. $murid[1] .' '."adalah kawan baik. Mereka juga mempunyai kawan perempuan bernama" .' '.$murid[2] . " dan " . $murid[3];


echo "<pre>";

    print_r($murid);

echo "</pre>";


?>