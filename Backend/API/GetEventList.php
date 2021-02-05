<?php

include 'CalendarEvent.php';


$FromRec = $_POST['FromRec'];
$ItemsCount = $_POST['ItemsCount'];


if(isset($FromRec)&&
    isset($ItemsCount)){

    manage_event::GetEventList($FromRec, $ItemsCount);

}