<?php

class jsonPersistence implements jsonPersistenceActions {  
    
    private Array $task_array = array();


    function __construct(){

    }
    public function listTasks() {
        return $this->task_array;
    }
    public function viewTask() {

    }
    public function editOneTask() {

    }
    public function addTask() {

    }
    public function deleteTask() {

    }
    public function searchTask() {
        
    }
}