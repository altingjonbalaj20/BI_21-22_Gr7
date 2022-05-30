<?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
      
        $sql = 'CREATE Database if not exists Users';
        $retval = mysqli_query( $conn, $sql );
        if(! $retval )
        {
         die('Could not create database: ' . mysqli_connect_error());
        }
        

        $db='Users';
	    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $sql = 'CREATE TABLE if not exists users (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            username varchar(100) NOT NULL UNIQUE,
            password varchar(100) NOT NULL )';
            $retval = mysqli_query( $conn, $sql );
        if(! $retval )
            {
            die('Could not create table: ' . mysqli_connect_error());
            }
  
        
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

            $sql = 'CREATE Database if not exists Users';
        $retval = mysqli_query( $conn, $sql );
 

	
    ?>