<?php
class Database extends mysqli
{
    private $user;
    private $host;
    private $pass;
    private $db;
    private $link;

    public function __construct($db_bi_connect=true)
    {
        include('config.php');
        $this->user = DBUSER;
        $this->host = DBHOST;
        $this->pass = DBPWD;
        $this->db = DBNAME;
        if($db_bi_connect){
            $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        }
        else{
            $this->link = mysqli_connect($this->host, $this->user, $this->pass);
        }
    }
    function execQuery($query, $error)
    {
        $retval = mysqli_query($this->link, $query);
        if (!$retval || $retval == null) {
            die($error . mysqli_connect_error());
        }
        return $retval;
    }

    function __destruct()
    {
        $this -> closeConnection();
    }

    function closeConnection(){
        mysqli_close($this->link);
    }

    function getHost(){
        return $this -> host;
    }

    function getUser(){
        return $this -> user;
    }

    function getDB(){
        return $this -> db;
    }

    function setHost($host){
        $this -> host = $host;
        $this -> reconnect();
    }

    function setUser($user){
        $this -> user = $user;
        $this -> reconnect();
    }

    function setDB($db){
        $this -> db = $db;
        $this -> reconnect();
    }

    function setPwd($pwd){
        $this -> pass = $pwd;
        $this -> reconnect();
    }

    function reconnect(){
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
}
