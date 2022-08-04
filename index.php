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

$pdo = Connection::make();

$db = new Database($pdo);

$query = $db->query('SELECT * FROM {$table}');

require 'index.view.php';