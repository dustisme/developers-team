<?php

interface PersistenceInterface {
    
    public function listTasks();
    public function viewTask($task_id);
    public function editOneTask($task_id) {}
    public function addTask();
    public function deleteTask($task_id);
    public function searchTask($task_id);
    //public function searchUsername($username_id);
}

