<?php
function changeStatus($task_id)
{
    $task = R::load('tasks',
        $task_id);
    $task->status = $task->status === 'ready' ? null : 'ready';
    R::store($task);
}
