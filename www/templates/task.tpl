<?php
/** @var array $task */
?>

<li class="list-group-item d-flex justify-content-between">
    <span class="todo-item-text
    <?= $task['status'] === 'ready' ? 'done' : '' ?>">
        <?= $task['title'] ?>
    </span>
    <div class="btn-group ">
        <button role="button" class="btn btn-outline-dark btn-sm">Важное</button>
        <button role="button" class="btn btn-outline-danger btn-sm">Удалить</button>
    </div>
</li>
