<?php

include 'CalendarDays.php';

$day_specifiedDay = $_POST['day_specifiedDay'];

if(isset($day_specifiedDay)){
    manage_days::GetMonthEvents($day_specifiedDay);
}