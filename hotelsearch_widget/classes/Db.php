<?php
session_start();
class Db {

    public $db;

    function Db() {
        $this->db = mysqli_connect("localhost", "root", "", "subcribers");
        
        if ($this->db) {
            echo "Good. connected";
        } else {
            echo "DB not connectedddd";
            die();
        }
    }

}

$db=new Db();