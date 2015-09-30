<?php
$title = 'Книги';
include 'head.php';
include '../DB/Registry.php';
include '../Controler/allBooksMOdel.php' ?>
<body>
<div>
    <a href="../View/newBook.php">Нова книга</a>
</div>
<div>
    <a href="../View/newAuthor.php">Нов автор</a>
</div>
<table>
    <thead>
    <tr>
        <td>Книга</td>
        <td>Автори</td>
    </tr>
    </thead>
    <tbody>
    <?php
    ?>
    </tbody>
</table>
</body>