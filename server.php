<?php

$string = file_get_contents('dischi.json');
$albums_collection = json_decode($string, true);

if(isset($_POST['albumTitle'])){

    $newAlbum = [
        'title' => $_POST['albumTitle'],
    ];

    $albums_collection[] = $newAlbum;

    file_put_contents('dischi.json', json_encode($albums_collection));
}

header('Content-Type: application/json');
echo json_encode($albums_collection);