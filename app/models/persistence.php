<?php
include 'Task.php';

class Persistence implements PersistenceInterface {  
    
    private Array $task_array = array();
    private int $track_id;

    //creates an array of objects Task
    function __construct() {
        if(file_exists(dirname(__DIR__).'\..\web\json\data.json')){
            $this->task_array = json_decode(file_get_contents(dirname(__DIR__).'\..\web\json\data.json'));
          }
        $this->track_id = end($this->task_array)->id;
    }
    function listTasks() {
        return $this->task_array;
    }
    function viewTask($task_id) {
        return $this->searchTask($task_id);
    }
    function editTask($task_id, $edited_task) { 
        $this->searchTask($task_id)->username = $edited_task->username;
        $this->searchTask($task_id)->task = $edited_task->task_description;
        $this->searchTask($task_id)->startingDate = $edited_task->starting_date;
        $this->searchTask($task_id)->finishedDate = $edited_task->finished_date;
        $this->searchTask($task_id)->status = $edited_task->status;
        
        $this->addDataToJson($this->task_array);
    }
    //object property Status is a constant var
    function addTask() {
        $task = new Task("", "", '');
        $this->track_id += 1;
        $task->task_id = $this->track_id;
        array_push($this->task_array[], $task);
        $this->addDataToJson($this->task_array);
    }
    function deleteTask($task_id) {
        $deletedTask = $this->task_array[$this->searchTask($task_id)];
        unset($deletedTask);
        $this->addDataToJson($this->task_array);
        return $this->task_array;
    }
    //search by object property (task id)
    function searchTask($task_id) {
        foreach($this->task_array as $selected_task) {
            if($selected_task->id == $task_id) {
                return $selected_task;
            }
        }
        return false;
    }
    function addDataToJson ($task_array) {
        file_put_contents(dirname(__DIR__).'./web/json/data.json', json_encode($task_array, JSON_PRETTY_PRINT));
    }
}