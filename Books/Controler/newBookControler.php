<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 �.
 * Time: 12:54 �.
 */
include '../Model/Author.php';
$aut = new Author();
$authors = $aut->selectAllAuthors();