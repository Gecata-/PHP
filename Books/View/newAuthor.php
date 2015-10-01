<?php
$title = 'Нов автор';
include 'head.php';
include '../Controler/newAuthor.php'; ?>

<body>
<a href="allBooks.php">Книги</a>

<form method="POST">
    <div>Автор: <input type="text" name="authorName">

        <p><?= isset($minLenght) ? $minLenght : ''; ?></p>
        <input type="submit" value="Добави">
    </div>
</form>
<!-- sorry for that border :)-->
<table border="1">
    <thead>
    <tr>
        <td>Автори</td>
    </tr><?php
    foreach ($booksAndAuthors as $book => $author) {
        echo '<tr><td>' . $author . '</td></tr>';

    }
    ?>
    </tbody>
</table>
</body>

