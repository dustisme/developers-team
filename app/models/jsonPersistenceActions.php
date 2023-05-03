<?php

interface jsonPersistenceActions {
    
    public function listTasksAction();
    public function viewTaskAction($id);
    public function editOneTaskAction($id) {}
    public function addTaskAction();
    public function deleteTask($id);
}

