<?php

class Task {
    public $title;
    public $due;
    public $assigned_to;
    public $completed;

    public function __construct($title, $due, $assigned_to, $completed) {
        $this->title = $title;
        $this->due = $due;
        $this->assigned_to = $assigned_to;
        $this->completed = $completed;
    }


/*
class Task {

    public function 
    __construct($description) {
        $this->description = $description;
    }
} 


$task = new Task('Go over PHP again');

$task->completed = true;

var_dump($task);    

*/
require index.view.php;

}