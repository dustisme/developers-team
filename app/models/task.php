<?php

    class Task {
        private int $id;
        private string $task_name;
        private string $username;
        private $starting_date;
        private $finished_date;
        private string $status;

        //getters
        function getId() {
            return $this->id;
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
        function setStatus(string $status) {
            $this->status = $status;
        }
    }