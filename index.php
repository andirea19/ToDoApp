<?php

$task = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'John Doe',
    'completed' => false
];

$tasks = [
    new Task (['title'] => 'Finish homework', ['due'] => 'today', ['assigned_to'] => 'John Doe', ['completed'] => false),
    new Task ['title' => 'Finish homework', 'due' => 'today', 'assigned_to' => 'John Doe', 'completed' => false],
    new Task ['assigned_to'] => 'John Doe', ['completed'] => false]
]

require 'index.view.php';