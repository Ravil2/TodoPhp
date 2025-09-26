<?php
require_once(ROOT . 'requi/rb-mysql.php');


try {
    R::setup(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASS
    );

    if (!R::testConnection()) {
        throw  new Exception("Не удалось соединиться с базой данных !");
    }

    $tasks = R::findAll('tasks');


} catch (Exception $e) {
    die("Ошибка подключения к бд: " . $e->getMessage());
}
