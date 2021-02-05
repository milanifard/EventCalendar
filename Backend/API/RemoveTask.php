<?php

include 'CalendarTask.php';

$task_id = $_POST['task_id'];

if(isset($task_id)){
    manage_task::RemoveTask($task_id);
}