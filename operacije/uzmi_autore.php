<?php

include $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/modeli/BookAuthor.php';

$ba = new BookAuthor();

$response = [];

foreach ($ba->getAll() as $author)
{
    $response[] = [
        'id' => $author->getId(),
        'name' => $author->getAuthorName(),
    ];
}

echo json_encode($response);
