<?php
require_once __DIR__  . '/Db.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subcribed
 *
 * @author lankesh
 */
class Subscribers extends Db{
    function Subscribers() {
        //Not yet implemented
        parent::Db();
    }

    public function getChannels() {
        $query = "select * from channel";
        //print_r($query);
        $runQuery = mysqli_query($this->db, $query);

        $channel = [];
        if ($runQuery) {
            while ($rs = mysqli_fetch_assoc($runQuery)) {
                $channel[] = $rs;
            }
        }
       
        return $channel;
    }
    
    public function getUserDetails(){
        $query = "select * from users";
        $runQuery = mysqli_query($this->db, $query);
        $users=[];
        if($runQuery){
            while ($rs = mysqli_fetch_assoc($runQuery)) {
                $users[] = $rs;
            }
            
            
        }
        return $users;
        
    }
    
}
