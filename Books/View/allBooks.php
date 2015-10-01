<?php
$title = 'Книги';
include 'head.php';
include '../Controler/allBooksControler.php' ?>
<body>
<div>
    <a href="../View/newBook.php">Нова книга</a>
</div>
<div>
    <a href="../View/newAuthor.php">Нов автор</a>
</div>
<!-- sorry for that border :)-->
<table border="1">
    <thead>
    <tr>
        <td>Книга</td>
        <td>Автори</td>
    </tr>
    </thead>
    <tbody>
    <?php
    //var_dump($booksAndAuthors);
    foreach ($booksAndAuthors as $book => $authors) {
        echo '<tr><td>' . $book . '</td><td>' . implode(', ', $authors) . '</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>