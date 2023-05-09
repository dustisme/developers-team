<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class ApplicationController extends Controller 
{
    private $persistence;
    public function __construct() {
        $this->persistence = new Persistence();
    }
	public function indexAction() {
		$this->view->listTasks = $this->persistence->listTasks();
	}

    public function viewTaskAction() {
        $this->view->oneTask = $this->persistence->viewTask($_POST[]);
    }

    public function editOneTaskAction() {
        
    }

    public function addTaskAction() {

    }
    public function deleteTaskAction() {
        $this->view->deteleTask = $this->persistence->deleteTask($_POST[]);
    }
    public function searchTaskAction() {

    }
	
	public function checkAction()
	{
		echo "hello from test::check";
	}
}
