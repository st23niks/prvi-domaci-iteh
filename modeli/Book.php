<?php

class Book
{
    private int $id;
    private string $bookName;
    private int $releasedYear;
    private BookAuthor $bookAuthor;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $bookName
     */
    public function setBookName(string $bookName): void
    {
        $this->bookName = $bookName;
    }

    /**
     * @param int $releasedYear
     */
    public function setReleasedYear(int $releasedYear): void
    {
        $this->releasedYear = $releasedYear;
    }

    /**
     * @param BookAuthor $bookAuthor
     */
    public function setBookAuthor(BookAuthor $bookAuthor): void
    {
        $this->bookAuthor = $bookAuthor;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBookName(): string
    {
        return $this->bookName;
    }

    /**
     * @return int
     */
    public function getReleasedYear(): int
    {
        return $this->releasedYear;
    }

    /**
     * @return BookAuthor
     */
    public function getBookAuthor(): BookAuthor
    {
        return $this->bookAuthor;
    }
}
