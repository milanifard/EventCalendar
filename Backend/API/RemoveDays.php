<?php

include 'CalendarDays.php';

$day_event_id = $_POST['day_event_id'];

if(isset($day_event_id)){
    manage_days::RemoveDays($day_event_id);
}