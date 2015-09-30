<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 г.
 * Time: 10:55 ч.
 */
include '../Model/Author.php';
try {
    if ($_POST) {
        $aut = new Author();
        $author = trim($_POST['authorName']);
        if (mb_strlen($author) < 3) {
            $minLenght = 'Името на автора не трябва да е по-малко от 3 символа.';
        } else if ($aut->checkRepeatName($author)) {
            $minLenght = 'Автора: '.$author.' , който се опитвате да добавите, вече съществува в списъка!';
        } else {
            $aut->insertAuthor($author);
            header('Location: ../View/allBooks.php');
        }
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}