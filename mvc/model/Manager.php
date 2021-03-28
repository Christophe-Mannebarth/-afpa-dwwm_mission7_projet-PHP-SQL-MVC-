<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost.mysql.db;dbname=mission7;charset=utf8', 'root', '');
        return $db;
    }
}