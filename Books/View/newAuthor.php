<?php
$title = 'Нов автор';
include 'head.php';
include '../Controler/newAuthor.php';?>

<body>
<a href="allBooks.php">Книги</a>

<form method="POST">
    <div>Автор: <input type="text" name="authorName"><p><?=$minLenght?></p>
        <input type="submit" value="Добави">
    </div>
</form>
<table>
    <thead>
    <tr>
        <td>Автори</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
    </tr>
    </tbody>
</table>
</body>

