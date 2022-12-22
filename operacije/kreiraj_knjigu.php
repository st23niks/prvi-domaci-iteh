<?php

$baza = new Baza();

$bookName = $_POST['book_name'];
$releasedYear = $_POST['released_year'];
$authorId = $_POST['author_id'];

if(is_string($bookName) && is_int($releasedYear) && is_int($authorId)) {
    $book = new Book();
    $book->setBookName($bookName);
    $book->setReleasedYear($releasedYear);
    $book->setBookAuthorId($authorId);
    $book->save();
}
