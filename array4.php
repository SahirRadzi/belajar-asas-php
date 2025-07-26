<?php 

$team_jdn = [];

$programmer = [
    'nama' => 'Encik Ahmad',
    'umur' => 24,
    'posisi' => 'ptm'
];

$team_jdn[] = $programmer;

$programmer = [
    'nama' => 'Encik Kamil',
    'umur' => 32,
    'posisi' => 'pptm'
];

$team_jdn[] = $programmer;


    echo 'Nama : '. $team_jdn[1]['nama'] .'<br>';
    echo 'Umur : '. $team_jdn[1]['umur'] .'<br>';
    echo "<br>----------------</br>";


echo "<pre>";

    print_r($team_jdn);

echo "</pre>";

?>