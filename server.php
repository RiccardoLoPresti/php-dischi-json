<?php

$string = file_get_contents('dischi.json');
$albums_collection = json_decode($string, true);

if(isset($_POST['albumTitle']) && isset($_POST['albumAuthor']) && isset($_POST['albumYear']) && isset($_POST['albumPoster']) && isset($_POST['albumGenre'])){

    $newAlbum = [
        'title' => $_POST['albumTitle'],
        'author' => $_POST['albumAuthor'],
        'year' => $_POST['albumYear'],
        'poster' => $_POST['albumPoster'],
        'genre' => $_POST['albumGenre'],
    ];

    $albums_collection[] = $newAlbum;

    file_put_contents('dischi.json', json_encode($albums_collection));
}

header('Content-Type: application/json');
echo json_encode($albums_collection);