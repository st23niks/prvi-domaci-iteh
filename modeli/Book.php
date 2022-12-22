<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/Baza.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/modeli/BookAuthor.php';

class Book
{
    private int $id;
    private string $bookName;
    private int $releasedYear;
    private int $bookAuthorId;

    public function getAuthor()
    {
        return BookAuthor::findById($this->getBookAuthorId());
    }

    public function getAll()
    {
        $baza = new Baza();
        $konekcija = $baza->getConnection();
        $query = $konekcija->prepare("select * from books");

        $books = [];

        if($query->execute()) {
            $result = $query->get_result();

            while($row = $result->fetch_assoc()) {
                $book = new Book();
                $book->setId($row['id']);
                $book->setBookName($row['book_name']);
                $book->setReleasedYear($row['released_year']);
                $book->setBookAuthorId($row['author_id']);
                $books[] = $book;
            }
        }

        $query->close();
        $baza->disconnect();

        return $books;
    }

    public function save()
    {
        $baza = new Baza();
        $konekcija = $baza->getConnection();
        $query = $konekcija->prepare("insert into books (book_name, released_year, author_id) values (?, ?, ?)");

        $name = $this->getBookName();
        $year = $this->getReleasedYear();
        $authorId = $this->getBookAuthorId();
        $query->bind_param("sii", $name, $year, $authorId);

        $query->execute();

        $query->close();
        $baza->disconnect();
    }

    public function delete()
    {
        $baza = new Baza();
        $konekcija = $baza->getConnection();
        $query = $konekcija->prepare("delete from books where id = ?");

        $id = $this->getId();
        $query->bind_param("i", $id);

        $query->execute();

        $query->close();
        $baza->disconnect();
    }

    public function getBookAuthorId()
    {
        return $this->bookAuthorId;
    }

    public function setBookAuthorId(int $bookAuthorId)
    {
        $this->bookAuthorId = $bookAuthorId;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setBookName(string $bookName)
    {
        $this->bookName = $bookName;
    }

    public function setReleasedYear(int $releasedYear)
    {
        $this->releasedYear = $releasedYear;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBookName()
    {
        return $this->bookName;
    }

    public function getReleasedYear()
    {
        return $this->releasedYear;
    }
}
