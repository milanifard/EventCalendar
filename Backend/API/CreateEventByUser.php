<?php

include 'CalendarCreateEvents.php';


$create_id = $_POST['create_id'];
$day_id = $_POST['day_id'];
$event_id = $_POST['event_id'];
$user_id = $_POST['user_id'];


if(isset($create_id)&&
    isset($day_id)&&
    isset($event_id)&&
    isset($user_id)){

    manage_create_event::CreateEventByUser($create_id, $day_id, $event_id, $user_id);

}