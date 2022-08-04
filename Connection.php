<?php 

class Connection
{
    public static function connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=todolist', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}

Connection::make();