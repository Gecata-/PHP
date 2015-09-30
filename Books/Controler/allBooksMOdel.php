<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 ã.
 * Time: 15:49 ÷.
 */
include '../DB/mySQL.php';
include '../Model/Author.php';
include '../Model/BookModel.php';
include '../Model/BooksAndAuthorsModel.php';
$registry = Registry::getRegistry();
$author = new Author();
$books = new BookModel();
$registry->Authors = $author->selectAllAuthors();
$registry->Books = $books->getBook();

//var_dump($registry);
$all = new BooksAndAuthorsModel();