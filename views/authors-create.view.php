<?php require_once 'partials/header.view.php' ?>

    <h1>Add new author</h1>

    <form action="/authors" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>


        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-danger">Create</button>
        </div>
    </form>


<?php require_once 'partials/footer.view.php' ?>