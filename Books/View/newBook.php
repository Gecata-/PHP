<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 г.
 * Time: 10:00 ч.
*/
$title = 'Нов Автор';
include 'head.php';
include '../Controler/newBookControler.php';
?>

<body>
<a href="allBooks.php">Книги</a>
<form action="" method="POST">
    <div>
        Име на книгата: <input type="text" name="bookName">
    </div>
    <select name="authors" id="author" multiple="multiple">
        <?php
        foreach($authors as $author){
           echo '<option value="'.$author.'">'.$author.'</option>';
        }
        ?>
    </select>
    <input type="submit" value="Добави">
</form>
</body>