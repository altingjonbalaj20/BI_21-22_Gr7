<?php
class Database 
{
    private $user;
    private $host;
    private $pass;
    private $db;
    private $link;

    public function __construct()
    {
        include('config.php');
        $this->user = DBUSER;
        $this->host = DBHOST;
        $this->pass = DBPWD;
        $this->db = DBNAME;
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
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
}
