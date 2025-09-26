<?php

require_once('./config.php');
require_once('./db.php');

if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
    $task = R::dispense('tasks');
    $task->title = $_POST['title'];
    R::store($task);
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $task = R::load('tasks',
            $_GET['id']);
    if ($task->id) {
        R::trash($task);
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'changeStatus' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $task = R::load('tasks',
            $_GET['id']);
    $task->status = $task->status === 'ready' ? null : 'ready';
    R::store($task);
}

$tasks = R::findAll('tasks');

$count_all = count($tasks);

$count_done = 0;

$count_undone = $count_all - $count_done;


foreach ($tasks as $task) {
    $task->status ? $count_done++ : '';
}

?>


<!DOCTYPE html>
<html lang="ru">
<?php
include(ROOT . 'templates/page_parts/head.tpl');
?>
<body class="todo-app p-5">


<?php
include(ROOT . 'templates/page_parts/header.tpl');
?>

<ul class="list-group mb-3">
    <?php


    if (empty($tasks)) {
        include(ROOT . 'templates/empty.tpl');
    } else {
        foreach ($tasks as $task) {
            include(ROOT . 'templates/task.tpl');
        }
    }
    ?>
</ul>

<?php
include(ROOT . 'templates/page_parts/form.tpl');
?>
</body>
</html>
