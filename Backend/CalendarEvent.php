<?php
/**
 * Created by PhpStorm.
 * User: Behrooz
 * Date: 2/5/2021
 */

include 'pdodb.class.php';

class CalendarEvent
{
    public $event_id;
    public $event_title;
    public $event_type;
    public $event_description;
    public $event_start_date;
    public $event_end_date;
    public $event_priority;

    /**
     * CalendarEvent constructor.
     * @param $event_id
     * @param $event_title
     * @param $event_type
     * @param $event_description
     * @param $event_start_date
     * @param $event_end_date
     * @param $event_priority
     */
    public function __construct($event_id, $event_title, $event_type, $event_description, $event_start_date, $event_end_date, $event_priority)
    {
        $this->event_id = $event_id;
        $this->event_title = $event_title;
        $this->event_type = $event_type;
        $this->event_description = $event_description;
        $this->event_start_date = $event_start_date;
        $this->event_end_date = $event_end_date;
        $this->event_priority = $event_priority;
    }


}

class manage_event
{
    public static function CreateEvent($event_id, $event_title, $event_type, $event_description, $event_start_date, $event_end_date, $event_priority)
    {
        $mysql = pdodb::getInstance();
        $query = "insert into sadaf.calendar_events(event_id, event_title, event_type, event_description, event_start_date, event_end_date, event_priority) values (?)";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($event_id, $event_title, $event_type, $event_description, $event_start_date, $event_end_date, $event_priority));
    }


    // g. move event to another date
    public static function UpdateEvent($event_id, $event_start_date, $event_end_date)
    {
        $mysql = pdodb::getInstance();
        $query = "update sadaf.products set event_start_date=?, event_end_date=? where event_id=?";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($event_start_date, $event_end_date, $event_id));
    }


    public static function RemoveEvent($event_id)
    {
        $mysql = pdodb::getInstance();
        $query = "delete from sadaf.calendar_events where event_id=?";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($event_id));
    }


    public static function GetEventList($FromRec = -1 , $ItemsCount = -1){
        if(!is_numeric($FromRec))
            $FromRec = 0;
        if(!is_numeric($ItemsCount))
            $ItemsCount = 10;

        $ret = array();
        $mysql = pdodb::getInstance();

        if($FromRec>-1)
            $query = "select * from sadaf.calendar_events order by event_end_date DESC limit $FromRec, $ItemsCount";
        else
            $query = "select * from sadaf.calendar_events order by event_end_date DESC";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array());

        while ($rec = $res->fetch()){
            $obj = new CalendarEvent($rec["event_id"],$rec["event_title"],$rec["event_type"],$rec["event_description"],$rec["event_start_date"],$rec["event_end_date"],$rec["event_priority"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

}



