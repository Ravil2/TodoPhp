<?php
function addTask($title)
{
    $task = R::dispense('tasks');
    $task->title = $title;
    R::store($task);
}
