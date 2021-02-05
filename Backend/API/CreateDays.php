<?php

include 'CalendarDays.php';


$day_id = $_POST['day_id'];
$day_completeDate = $_POST['day_completeDate'];
$day_specifiedMonth = $_POST['day_specifiedMonth'];
$day_specifiedYear = $_POST['day_specifiedYear'];
$day_specifiedDay = $_POST['day_specifiedDay'];
$day_isHoliday = $_POST['day_isHoliday'];
$day_event_id = $_POST['day_event_id'];


if(isset($day_id)&&
    isset($day_completeDate)&&
    isset($day_specifiedMonth)&&
    isset($day_specifiedYear)&&
    isset($day_specifiedDay)&&
    isset($day_isHoliday)&&
    isset($day_event_id)){

    manage_days::CreateDays($day_id, $day_completeDate, $day_specifiedMonth, $day_specifiedYear, $day_specifiedDay, $day_isHoliday, $day_event_id);

}