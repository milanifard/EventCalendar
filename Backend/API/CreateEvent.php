<?php

include 'CalendarEvent.php';


$event_id = $_POST['event_id'];
$event_title = $_POST['event_title'];
$event_type = $_POST['event_type'];
$event_description = $_POST['event_description'];
$event_start_date = $_POST['event_start_date'];
$event_end_date = $_POST['event_end_date'];
$event_priority = $_POST['event_priority'];


if(isset($event_id)&&
    isset($event_title)&&
    isset($event_type)&&
    isset($event_description)&&
    isset($event_start_date)&&
    isset($event_end_date)&&
    isset($event_priority)){

    manage_event::CreateEvent($event_id, $event_title, $event_type, $event_description, $event_start_date, $event_end_date, $event_priority);

}