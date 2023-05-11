<?php
include 'task.php';

class Persistence implements PersistenceInterface {  
    
    private Array $task_array = array();

    //creates an array of objects Task
    function __construct() {
        if(file_exists(dirname(__DIR__).'\..\web\json\data.json')){
            $this->task_array = json_decode(file_get_contents(dirname(__DIR__).'\..\web\json\data.json'));
          }
    }
    function listTasks() {
        return $this->task_array;
    }
    function viewTask($task_id) {
        return $this->task_array[$this->searchTask($task_id)];
    }
    function editTask($task) { 
        $this->task_array[$this->searchTask($task->getId())]->setTasK($task->getTask());
        $this->task_array[$this->searchTask($task->getId())]->setUsername($task->getUsername());
        $this->task_array[$this->searchTask($task->getId())]->setStatus($task->getStatus());
        $this->task_array[$this->searchTask($task->getId())]->setStarting_date($task->getStarting_date());
        $this->task_array[$this->searchTask($task->getId())]->setFinished_date($task->getFinished_date());
        
        $this->addDataToJson($this->task_array);
    }
    //object property Status is a constant var
    function addTask() {
        $task = new Task("", "", '');
        $this->task_array[] = $task;
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
        foreach($this->task_array as $task) {
            if($task->id == $task_id) {
                return $task;
            }
        }
        return false;
    }
    function addDataToJson ($task_array) {
        file_put_contents(dirname(__DIR__).'./web/json/data.json', json_encode($task_array, JSON_PRETTY_PRINT));
    }
}