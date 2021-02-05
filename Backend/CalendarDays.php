<?php
/**
 * Created by PhpStorm.
 * User: Behrooz
 * Date: 2/5/2021
 */

include 'pdodb.class.php';


class CalendarDays
{
    public $day_id;
    public $day_completeDate;
    public $day_specifiedMonth;
    public $day_specifiedYear;
    public $day_specifiedDay;
    public $day_isHoliday;
    public $day_event_id;

    /**
     * CalendarDays constructor.
     * @param $day_id
     * @param $day_completeDate
     * @param $day_specifiedMonth
     * @param $day_specifiedYear
     * @param $day_specifiedDay
     * @param $day_isHoliday
     * @param $day_event_id
     */
    public function __construct($day_id, $day_completeDate, $day_specifiedMonth, $day_specifiedYear, $day_specifiedDay, $day_isHoliday, $day_event_id)
    {
        $this->day_id = $day_id;
        $this->day_completeDate = $day_completeDate;
        $this->day_specifiedMonth = $day_specifiedMonth;
        $this->day_specifiedYear = $day_specifiedYear;
        $this->day_specifiedDay = $day_specifiedDay;
        $this->day_isHoliday = $day_isHoliday;
        $this->day_event_id = $day_event_id;
    }

}

class manage_days
{
    public static function CreateDays($day_id, $day_completeDate, $day_specifiedMonth, $day_specifiedYear, $day_specifiedDay, $day_isHoliday, $day_event_id)
    {
        $mysql = pdodb::getInstance();
        $query = "insert into sadaf.calendar_days(day_id, day_completeDate, day_specifiedMonth, day_specifiedYear, day_specifiedDay, day_isHoliday, day_event_id) values (?)";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($day_id, $day_completeDate, $day_specifiedMonth, $day_specifiedYear, $day_specifiedDay, $day_isHoliday, $day_event_id));
    }


    public static function RemoveDays($day_event_id)
    {
        $mysql = pdodb::getInstance();
        $query = "delete from sadaf.calendar_days where day_event_id=?";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($day_event_id));
    }


    public static function GetDays(){

        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_days order by day_completeDate ASC ";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array());

        while ($rec = $res->fetch()){
            $obj = new CalendarDays($rec["day_id"],$rec["day_completeDate"],$rec["day_specifiedMonth"],$rec["day_specifiedYear"],$rec["day_specifiedDay"],$rec["day_isHoliday"], $rec["day_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

    public static function GetHolidays(){

        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_days order by day_completeDate ASC where day_isHoliday = 1";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array());

        while ($rec = $res->fetch()){
            $obj = new CalendarDays($rec["day_id"],$rec["day_completeDate"],$rec["day_specifiedMonth"],$rec["day_specifiedYear"],$rec["day_specifiedDay"],$rec["day_isHoliday"], $rec["day_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

    public static function GetAllEvents(){

        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_days order by day_completeDate ASC where day_event_id != NULL";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array());

        while ($rec = $res->fetch()){
            $obj = new CalendarDays($rec["day_id"],$rec["day_completeDate"],$rec["day_specifiedMonth"],$rec["day_specifiedYear"],$rec["day_specifiedDay"],$rec["day_isHoliday"], $rec["day_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

    public static function GetWeekEvents($day_specifiedDay){

        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_days order by day_completeDate ASC where day_specifiedDay < ? and day_specifiedDay >= ? and day_event_id != NULL";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array($day_specifiedDay+7, $day_specifiedDay));

        while ($rec = $res->fetch()){
            $obj = new CalendarDays($rec["day_id"],$rec["day_completeDate"],$rec["day_specifiedMonth"],$rec["day_specifiedYear"],$rec["day_specifiedDay"],$rec["day_isHoliday"], $rec["day_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

    public static function GetMonthEvents($day_specifiedMonth){

        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_days order by day_completeDate ASC where day_specifiedMonth =? and day_event_id != NULL";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array($day_specifiedMonth));

        while ($rec = $res->fetch()){
            $obj = new CalendarDays($rec["day_id"],$rec["day_completeDate"],$rec["day_specifiedMonth"],$rec["day_specifiedYear"],$rec["day_specifiedDay"],$rec["day_isHoliday"], $rec["day_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }
}



