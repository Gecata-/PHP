<?php

/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 г.
 * Time: 13:57 ч.
 */
class BookModel
{
    private $connection;

    public function __construct()
    {
        $sql = mySQL::getInstance();
        $this->connection = $sql->getConnection();
    }

    public function getBook()
    {

        $books = [];
        $stmt = mysqli_prepare($this->connection, 'SELECT book_id,book_title FROM books');
        mysqli_stmt_bind_result($stmt, $bookId, $bookName);
        mysqli_stmt_execute($stmt);
        while (mysqli_stmt_fetch($stmt)) {
            $books[$bookId] = $bookName;
        }
        return $books;
    }

    public function insertBook($bookName, $bookAuthor)
    {
        $stmt = mysqli_prepare($this->connection, 'INSERT INTO books(book_title) VALUES (?)');
        mysqli_stmt_bind_param($stmt, 's', $bookName);
        mysqli_stmt_execute($stmt);
        $authorId = [];
        $author = new Author();
        $allAuthors = $author->selectAllAuthors();
        foreach ($bookAuthor as $au) {
            foreach ($allAuthors as $key => $value) {
                if ($au == $value) {
                    $authorId[] = $key;
                }
            }
        }

        $books = $this->getBook();
        $keyID=0;
        foreach ($books as $key => $title) {
            if ($title == $bookName) {
                $keyID = $key;
            }
        }

        $stmt2 = mysqli_prepare($this->connection, 'INSERT INTO books_authors(book_id,author_id) VALUES (?,?)');
        for ($i = 0; $i < count($authorId); $i++) {
            mysqli_stmt_bind_param($stmt2, 'ii', $keyID, $authorId[$i]);
            mysqli_stmt_execute($stmt2);
        }

    }

}