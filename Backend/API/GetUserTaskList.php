<?php

include 'CalendarTask.php';

$task_specified_user_id = $_POST['task_specified_user_id'];

if(isset($task_id)){
    manage_task::GetUserTaskList($task_specified_user_id);
}