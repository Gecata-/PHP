<?php

/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 ã.
 * Time: 16:16 ÷.
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
        $this->connection = $sql->getConnection();
    }

    /**
     * @return array
     */
    public function GetBooksAndAuthors(){
        $booksAndAuthors=[];
        $stmt = mysqli_prepare($this->connection, 'SELECT author_id, book_id FROM books_authors WHERE 1');

        mysqli_stmt_bind_result($stmt, $authorId, $bookId);
        mysqli_stmt_execute($stmt);
        while(mysqli_stmt_fetch($stmt)){
            $booksAndAuthors[]=array($bookId=>$authorId);
        }
        return $booksAndAuthors;
    }
}