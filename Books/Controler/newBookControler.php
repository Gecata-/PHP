<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 г.
 * Time: 12:54 ч.
 */
include '../DB/mySQL.php';
include '../Model/Author.php';
include '../Model/BookModel.php';
$aut = new Author();
$authors = $aut->selectAllAuthors();

if($_POST){
    $bookAuthors = $_POST['authors'];
    $bookName = $_POST['bookName'];

    $book = new BookModel();

    $book->insertBook($bookName,$bookAuthors);

    header('Location: ../View/allBooks.php');
}