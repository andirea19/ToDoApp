<?php

class Connection
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct($host, $dbname, $username, $password)
    {
        // used to be hardcoded, is now relative
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            return new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            // added error handling
            die("Connection failed: " . $e->getMessage());
        }
    }
}
