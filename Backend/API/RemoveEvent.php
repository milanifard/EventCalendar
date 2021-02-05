<?php

include 'CalendarEvent.php';

$event_id = $_POST['event_id'];

if(isset($event_id)){
    manage_event::RemoveEvent($event_id);
}