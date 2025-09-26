<?php
/** @var array $task */

?>

<li class="list-group-item d-flex justify-content-between">
    <span class="todo-item-text
    <?= $task['status'] === 'ready' ? 'done' : '' ?>">
        <?= $task['title'] ?>
    </span>
    <form class="btn-group">

        <button
                name="action" value="changeStatus"
                class="btn  btn-sm <?= $task['status'] === 'ready' ? 'btn-outline-success' : 'btn-outline-dark' ?>">
            <?= $task['status'] === 'ready' ? 'В работу' : 'Готово' ?>
        </button>


        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <button name="action" value="delete" class="btn btn-outline-danger btn-sm"
        ">Удалить</button>
    </form>
</li>
