<?php
/**
 * Created by PhpStorm.
 * User: Behrooz
 * Date: 2/5/2021
 */
include 'pdodb.class.php';

class CalendarCreateEvents
{
    public $create_id;
    public $day_id;
    public $event_id;
    public $user_id;

    /**
     * CalendarCreateEvents constructor.
     * @param $create_id
     * @param $day_id
     * @param $event_id
     * @param $user_id
     */
    public function __construct($create_id, $day_id, $event_id, $user_id)
    {
        $this->create_id = $create_id;
        $this->day_id = $day_id;
        $this->event_id = $event_id;
        $this->user_id = $user_id;
    }

}

class manage_create_event
{
    public static function CreateEventByUser($create_id, $day_id, $event_id, $user_id)
    {
        $mysql = pdodb::getInstance();
        $query = "insert into sadaf.calendar_create_event(create_id, day_id, event_id, user_id) values (?)";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($create_id, $day_id, $event_id, $user_id));
    }


    public static function RemoveEventByUser($user_id)
    {
        $mysql = pdodb::getInstance();
        $query = "delete from sadaf.calendar_events where $user_id=?";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($user_id));
    }


}

