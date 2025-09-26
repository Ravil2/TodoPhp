<?php
function getAllTasks()
{
    return R::findAll('tasks');
}
