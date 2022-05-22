<?php
    require_once('config.php');
    $dbhost = DBHOST;
    $dbuser = DBUSER;
    $dbpass = DBPWD;
    $db = DBNAME;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function execQuery($query, $error, $success=""){
        global $conn;
        $retval = mysqli_query( $conn, $query );
        if(! $retval )
        {
        die($error . mysqli_connect_error());
        }
        if(strcmp($success, "")){
            echo "<script>alert($success)</script>";
        }
    }
