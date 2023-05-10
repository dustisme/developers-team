<?php
include_once 'status.php';

    class Task {
        protected int $task_id;
        protected string $task;
        protected string $username;
        protected $starting_date;
        protected $finished_date;
        private Status $status;

        //Status is a constant var
        function __construct(string $task, string $username, $starting_date, Status $status = Status::executing) {
            $this->task = $task;
            $this->username = $username;
            $this->starting_date = $starting_date;
            $this->status = $status;
        }
        //getters
        function getId() {
            return $this->task_id;
        }
        function getTask() {
            return $this->task;
        }
        function getUsername() {
            return $this->username;
        }
        function getStarting_date() {
            return $this->starting_date;
        }
        function getFinished_date() {
            return $this->finished_date;
        }
        function getStatus() {
            return $this->status;
        }

        //setters
        function setTask(string $task) {
            $this->task = $task;
        }
        function setUsername(string $username) {
            $this->username = $username;
        }
        function setStarting_date(string $starting_date) {
        $this->starting_date = $starting_date;
        }
        function setFinished_date(string $finished_date) {
            $this->finished_date = $finished_date;
        }
        function setStatus(Status $status) {
            $this->status = $status;
        }
    }