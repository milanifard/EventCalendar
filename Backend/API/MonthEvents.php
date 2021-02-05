<?php

include 'CalendarDays.php';

$day_specifiedMonth = $_POST['day_specifiedMonth'];

if(isset($day_specifiedMonth)){
    manage_days::GetMonthEvents($day_specifiedMonth);
}