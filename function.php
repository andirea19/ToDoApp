<?php 

    function isCompleted($task) {
        if ($task['completed']) {
            return '<del>' . $task['title'] . '</del>';
        } else {
            return $task['title'];
        }
    }