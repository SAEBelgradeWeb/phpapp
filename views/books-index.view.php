<?php require_once 'partials/header.view.php' ?>

<h1>Books</h1>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($books as $book) : ?>
        <tr>
            <td><?= $book->id ?></td>
            <td><?= $book->title ?></td>
            <td><?= $book->author ?></td>
            <td>Edit | <a href="/books/delete?id=<?= $book->id ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php require_once 'partials/footer.view.php' ?>
