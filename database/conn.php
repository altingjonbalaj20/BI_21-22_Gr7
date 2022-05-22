<?php
    include('./config.php');
    $dbhost = DBHOST;
    $dbuser = DBUSER;
    $dbpass = DBPWD;
    $db = DBNAME;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
     }
     echo "Connected successfully";
