<?php

/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 ã.
 * Time: 12:17 ÷.
 */
class Author
{

    private $host = 'localhost';
    private $user = 'Gecata';
    private $password = '1234';
    private $database = 'books';
    private $connection;

    public function __construct()
    {
        $mysql = mySQL::getInstance();
        $mysql->connect($this->host, $this->user, $this->password, $this->database);
        $this->connection = $mysql->getConnection();
    }

    public function insertAuthor($name)
    {
        $stmt = mysqli_prepare($this->connection, 'INSERT INTO authors(author_name) VALUES (?)');
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $name);
            mysqli_stmt_execute($stmt);
        } else {
            throw new Exception('Couldn`t insert author');
        }
    }

    public function checkRepeatName($name)
    {
        $stmt = mysqli_prepare($this->connection, 'SELECT author_name FROM authors WHERE author_name =?');
        mysqli_stmt_bind_param($stmt, 's', $name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $hasAuthor);
        mysqli_stmt_fetch($stmt);
        return $hasAuthor;
    }

    public function selectAllAuthors()
    {
        $authors =[];
        $stmt = mysqli_prepare($this->connection, 'SELECT author_id, author_name FROM authors');
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $authorID, $author);
        while(mysqli_stmt_fetch($stmt)){
            $authors[$authorID] = $author;
        };
        return $authors;
    }

}