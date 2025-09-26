<?php
function delete_task($task_id)
{
    $task = R::load('tasks',
        $_GET['id']);
    if ($task->id) {
        R::trash($task);
    }
}
