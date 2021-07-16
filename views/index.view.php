<?php require_once 'partials/header.view.php' ?>

<h1>Homepage</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed): ?>
            <strike><?= $task->description ?></strike>
            <?php else: ?>
            <?= $task->description ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

    <form method="POST" action="/tasks">
        <label for="description">Describe task</label>
        <input type="text" name="description" id="description">

        <input type="hidden" name="completed" value="0">


        <button>Save</button>
    </form>

<?php require_once 'partials/footer.view.php' ?>