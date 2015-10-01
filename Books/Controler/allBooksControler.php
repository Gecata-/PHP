<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 1.10.2015 ã.
 * Time: 10:50 ÷.
 */
include "../DB/mySQL.php";
include '../Model/BooksAndAuthorsModel.php';

$booksAndAuthorsModel = new BooksAndAuthorsModel();
$booksAndAuthors=$booksAndAuthorsModel->GetBooksAndAuthors();
