<?php
include '../app/models/classes/task.php';

class jsonPersistence implements jsonPersistenceActions {  
    
    private Array $task_array = array();

    function __construct(){
        if(file_exists(dirname(__DIR__).'/../web/json/data.json')){
            $this->task_array = json_decode(file_get_contents(dirname(__DIR__).'/../web/json/data.json'), false);
          }
    }
    function listTasks(): Array {
        return $this->task_array;
    }
    function viewTask($task_id) {
        return $this->task_array[$this->searchTask($task_id)];
    }
    function editOneTask($task_id) {

    }
    function addTask() {}
    function deleteTask($task_id) {
        foreach($this->task_array as $selected_task) {
            if($selected_task->getId() == $task_id) {
                unset($selected_task);
            } else {
                echo "Task not found";
            }
        }
    }
    function searchTask($task_id) {
        foreach($this->task_array as $selected_task) {
            if($selected_task->getId() == $task_id) {
                return $selected_task;
            }
        }
        return dirname(__DIR__).'/../app/views/scripts/error/error.phtml';
    }
}