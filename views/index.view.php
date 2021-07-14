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

<?php require_once 'partials/footer.view.php' ?>