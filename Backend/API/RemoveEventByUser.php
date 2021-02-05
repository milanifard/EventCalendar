<?php

include 'CalendarCreateEvents.php';

$user_id = $_POST['user_id'];

if(isset($user_id)){
    manage_create_event::RemoveEventByUser($user_id);
}