<?php

$string = file_get_contents('dischi.json');
$albums_collection = json_decode($string, true);

header('Content-Type: application/json');
echo json_encode($albums_collection);