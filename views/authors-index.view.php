<?php require_once 'partials/header.view.php' ?>

<h1>Authors</h1>
<div class="text-end m-3">
    <a href="/authors/create" class="btn btn-primary">Add an Author</a>
</div>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($authors as $author) : ?>
        <tr>
            <td><?= $author->id ?></td>
            <td><img src="/images/<?= $author->image ?>" alt="" width="100"></td>
            <td><?= $author->name ?></td>
            <td><a href="/authors/edit?id=<?= $author->id ?>">Edit</a> | <a href="/authors/delete?id=<?= $author->id ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php require_once 'partials/footer.view.php' ?>
