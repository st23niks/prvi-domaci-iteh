<?php

include $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/modeli/Book.php';

$book = new Book();

$listaKnjiga = $book->getAll();
