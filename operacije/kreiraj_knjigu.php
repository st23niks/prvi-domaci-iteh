<?php

include $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/modeli/Book.php';

$bookName = $_POST['book_name'];
$releasedYear = $_POST['released_year'];
$authorId = $_POST['author_id'];

$book = new Book();
$book->setBookName($bookName);
$book->setReleasedYear(intval($releasedYear));
$book->setBookAuthorId(intval($authorId));
$book->save();

echo json_encode(['success' => true]);
