<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/iteh-domaci-1-nikolija/Baza.php';

class BookAuthor
{
    private int $id;
    private string $authorName;

    public static function findById(int $id)
    {
        $baza = new Baza();
        $konekcija = $baza->getConnection();
        $query = $konekcija->prepare("select * from book_authors where id = ?");

        $query->bind_param("i", $id);

        $bookAuthor = null;

        if($query->execute()) {
            $result = $query->get_result();

            while($row = $result->fetch_assoc()) {
                $bookAuthor = new BookAuthor();
                $bookAuthor->setId($row['id']);
                $bookAuthor->setAuthorName($row['author_name']);
            }
        }

        $query->close();
        $baza->disconnect();

        return $bookAuthor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getAuthorName()
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName)
    {
        $this->authorName = $authorName;
    }
}
