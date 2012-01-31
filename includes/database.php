<?php

class database  {
    private $host;
    private $user;
    private $pwd;
    private $dbName;
    private $connection;
    private $result;
    private $error;
    private $rows;

    public function __construct($host, $user, $pwd, $db) {
        $this->result = null;
        $this->isready = false;
        $this->error = array();
    }
    
    public function __destruct() {
        @mysql_close($this->connection);
    }
    
    public function setHost($host)  {$this->host = $host;}
    public function setUser($user)  {$this->user = $user;}
    public function setPwd($pwd)    {$this->pwd = $pwd;}
    public function setdbName($db)  {$this->dbName = $db;}

    public function connectDB($host, $user, $pwd, $db)    {
        $connect = mysql_connect($host, $user, $pwd);
        if(!$connect)   {
            echo "ERROR connecting to database";
        }else{
            $seldb = mysql_select_db($db);
        }
        if(!$seldb) {
            echo "error selecting database";
        }
    }
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
