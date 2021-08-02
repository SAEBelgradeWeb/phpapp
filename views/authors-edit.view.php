<?php require_once 'partials/header.view.php' ?>

    <h1>Edit an Author - <?= $author->name ?></h1>


    <form action="/authors/update" method="POST" enctype="multipart/form-data">

        <!--     <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" class="form-control" value="<? /*= $book->id */ ?>" disabled>
        </div>-->

        <input type="hidden" name="id" value="<?= $author->id ?>">

        <div class="form-group">
            <label for="name">Author Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $author->name ?>">
        </div>

        <?php if ($author->image): ?>
            <div>
                <img src="/images/<?= $author->image ?>" alt="" width="100">
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-danger">Update</button>
        </div>
    </form>


<?php require_once 'partials/footer.view.php' ?>