<?php

//Тут Я прописал настройки БД
define('DB_HOST',
    'database');
define('DB_USER',
    'root');
define('DB_PASS',
    'tiger');
define('DB_NAME',
    'todo');

//Тут Я прописал пути к корневым папкам скрипта
define('ROOT',
    dirname(__FILE__) . '/');
define('HOST',
    'http://' . $_SERVER['HTTP_HOST'] . '/');


function p($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function pd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}
