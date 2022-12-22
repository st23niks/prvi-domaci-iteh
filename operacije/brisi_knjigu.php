<?php

$idZaBrisanje = $_GET['id'];

if(is_int($idZaBrisanje)) {
    $book = new Book();
    $book->setId($idZaBrisanje);
    $book->delete();
}
