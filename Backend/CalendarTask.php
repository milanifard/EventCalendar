<?php
/**
 * Created by PhpStorm.
 * User: Behrooz
 * Date: 2/5/2021
 */

include 'pdodb.class.php';

class CalendarTask
{
    public $task_id;
    public $task_title;
    public $task_description;
    public $task_specified_user_id;
    public $task_specified_event_id;

    /**
     * CalendarTask constructor.
     * @param $task_id
     * @param $task_title
     * @param $task_description
     * @param $task_specified_user_id
     * @param $task_specified_event_id
     */
    public function __construct($task_id, $task_title, $task_description, $task_specified_user_id, $task_specified_event_id)
    {
        $this->task_id = $task_id;
        $this->task_title = $task_title;
        $this->task_description = $task_description;
        $this->task_specified_user_id = $task_specified_user_id;
        $this->task_specified_event_id = $task_specified_event_id;
    }


}

class manage_task
{
    public static function CreateTask($task_id, $task_title, $task_description, $task_specified_user_id, $task_specified_event_id)
    {
        $mysql = pdodb::getInstance();
        $query = "insert into sadaf.calendar_tasks(task_id, task_title, task_description, task_specified_user_id, task_specified_event_id) values (?)";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($task_id, $task_title, $task_description, $task_specified_user_id, $task_specified_event_id));
    }


    public static function RemoveTask($task_id)
    {
        $mysql = pdodb::getInstance();
        $query = "delete from sadaf.calendar_tasks where task_id=?";
        $mysql->Prepare($query);
        $mysql->ExecuteStatement(array($task_id));
    }


    public static function GetUserTaskList($task_specified_user_id)
    {
        $ret = array();
        $mysql = pdodb::getInstance();

        $query = "select * from sadaf.calendar_tasks where task_specified_user_id =? ";

        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement(array($task_specified_user_id));

        while ($rec = $res->fetch()){
            $obj = new CalendarTask($rec["task_id"],$rec["task_title"],$rec["task_description"],$rec["task_specified_user_id"],$rec["task_specified_event_id"]);
            array_push($ret, $obj);
        }

        return $ret;
    }

}
