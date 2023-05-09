<?php
include_once 'status.php';

    class Task {
        private int $task_id;
        private string $task_name;
        private string $username;
        private $starting_date;
        private $finished_date;
        private Status $status;

        //Status is a constant var
        function __construct(string $task_name, string $username, $starting_date, Status $status = Status::executing) {
            $this->task_name = $task_name;
            $this->username = $username;
            $this->starting_date = $starting_date;
            $this->status = $status;
        }
        //getters
        function getId() {
            return $this->task_id;
        }
        function getTask_name() {
            return $this->task_name;
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
        function setTask_name(string $task_name) {
            $this->task_name = $task_name;
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