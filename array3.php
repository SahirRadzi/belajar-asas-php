<?php 

// $murid = []; // array null

// $murid[] = 'Ali'; // array 0
// $murid[] = 'Abu'; // array 1
// $murid[] = 'Aliyah'; // array 2
// $murid[] = 'Amira'; // array 3


// echo $murid[0] . ' + ' . $murid[1] . ' (' . $murid[2] . ' + ' . $murid[3] . ') ';
// echo "<br> ------------ </br>"; // breakdown


// echo $murid[0] .' '."dan".' '. $murid[1] .' '."adalah kawan baik. Mereka juga mempunyai kawan perempuan bernama" .' '.$murid[2] . " dan " . $murid[3];

$kelas = [];

$murid = [
    'nama' => 'Ali',
    'umur' => 11
];


$kelas[] = $murid;

$murid = [
    'nama' => 'Bakar',
    'umur' => 12
];


$kelas[] = $murid;

    echo 'Nama : '. $kelas[0]['nama'] .'<br>';
    echo 'Umur : '. $kelas[0]['umur'] .'<br>';
    echo "<br>----------------</br>";


echo "<pre>";

    print_r($kelas);

echo "</pre>";


?>