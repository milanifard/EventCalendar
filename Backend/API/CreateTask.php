<?php

include 'CalendarTask.php';


$task_id = $_POST['task_id'];
$task_title = $_POST['task_title'];
$task_description = $_POST['task_description'];
$task_specified_user_id = $_POST['task_specified_user_id'];
$task_specified_event_id = $_POST['task_specified_event_id'];


if(isset($task_id)&&
    isset($task_title)&&
    isset($task_description)&&
    isset($task_specified_user_id)&&
    isset($task_specified_event_id)){

    manage_task::CreateTask($task_id, $task_title, $task_description, $task_specified_user_id, $task_specified_event_id);

}