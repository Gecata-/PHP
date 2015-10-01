<?php

/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 г.
 * Time: 16:16 ч.
 */

/**
 * Class BooksAndAuthorsModel
 */
class BooksAndAuthorsModel
{
    private $connection;

    public function __construct()
    {
        $sql = mySQL::getInstance();
        $sql->connect();
        $this->connection = $sql->getConnection();

    }

    /**
     * @return array
     */
    public function GetBooksAndAuthors()
    {
        $booksAndAuthors = [];
        $stmt = mysqli_prepare($this->connection, 'SELECT * FROM books AS b INNER JOIN books_authors AS ba
                                ON ba.book_id = b.book_id INNER JOIN authors AS a ON ba.author_id = a.author_id');

        mysqli_stmt_bind_result($stmt, $bookId, $bookTitle, $ba_bid, $ba_aid, $authorId, $authorName);
        mysqli_stmt_execute($stmt);
        while (mysqli_stmt_fetch($stmt)) {
            $booksAndAuthors[$bookTitle][] = $authorName;
            //$booksAndAuthors[$bookTitle][$authorName]= $authorId;
        }
        return $booksAndAuthors;
    }
}