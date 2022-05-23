<?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
    
        $sql = 'DROP Database Users';
        $retval = mysqli_query( $conn, $sql );
        $sql = 'CREATE Database Users';
        $retval = mysqli_query( $conn, $sql );
        if(! $retval )
        {
         die('Could not create database: ' . mysqli_connect_error());
        }
        
        $db='Users';
	    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
        $sql = 'CREATE TABLE users_data (
            id integer, 
            user_name varchar(100) NOT NULL,
            password varchar(20) NOT NULL )';
            $retval = mysqli_query( $conn, $sql );
        if(! $retval )
            {
            die('Could not create table: ' . mysqli_connect_error());
            }
  
        
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
            $sql = "INSERT INTO users_data(id, user_name, password)
	VALUES ('1', 'ArtaGashi', 'gashigashi')";
    
	$retval = mysqli_query( $conn, $sql);
	if(!$retval)
	{
	die('Could not enter data: ' . mysqli_connect_error());
	}

    $retval = mysqli_query( $conn, $sql);
	
    ?>