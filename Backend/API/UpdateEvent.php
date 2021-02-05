<?php

include 'CalendarEvent.php';


$event_id = $_POST['event_id'];
$event_start_date = $_POST['event_start_date'];
$event_end_date = $_POST['event_end_date'];


if(isset($event_id)&&
    isset($event_start_date)&&
    isset($event_end_date)){

    manage_event::UpdateEvent($event_id, $event_start_date, $event_end_date);

}