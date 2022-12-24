<?php

include $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/modeli/Book.php';

$idZaBrisanje = $_GET['id'];

$book = new Book();
$book->setId($idZaBrisanje);
$book->delete();

echo json_encode(['success' => true]);
