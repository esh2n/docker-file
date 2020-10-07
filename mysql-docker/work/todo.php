<?php

namespace MyApp;

class Todo
{
    private $_db;

    public function __construct()
    {
        try {
            // こっちだとエラー出る
            // $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
            $this->_db = new \PDO('mysql:host=mysql;dbname=dotinstall_todo_app;', 'root', 'pass');
            $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getAll()
    {
        $stmt = $this->_db->prepare("select * from todos order by id desc");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
