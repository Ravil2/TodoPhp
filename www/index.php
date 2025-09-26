<?php

require_once('./config.php');
require_once('./db.php');

require_once(ROOT . 'tasks/add_task.php');
require_once(ROOT . 'tasks/delete_task.php');
require_once(ROOT . 'tasks/changeStatus_task.php');
require_once(ROOT . 'tasks/getAll_task.php');
require_once(ROOT . 'tasks/get_stats.php');

if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
    addTask($_POST['title']);
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    delete_task($_GET['id']);
}

if (isset($_GET['action']) && $_GET['action'] === 'changeStatus' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    changeStatus($_GET['id']);
}

$tasks = getAllTasks();
$statistics = getStats($tasks);
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
