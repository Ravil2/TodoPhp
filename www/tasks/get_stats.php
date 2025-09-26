<?php
function getStats($tasks)
{
    $count_all = count($tasks);
    $count_done = 0;

    foreach ($tasks as $task) {
        $task->status ? $count_done++ : '';
    }

    $count_undone = $count_all - $count_done;

    return [
        'count_all' => $count_all,
        'count_done' => $count_done,
        'count_undone' => $count_undone,
    ];
}
