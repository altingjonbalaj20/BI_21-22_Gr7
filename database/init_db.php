<?php
    require_once('./conn.php');

    $query = 'CREATE TABLE IF NOT EXISTS gallery (
        id integer primary key auto_increment,
        description varchar(255),
        url varchar(500),
        create_date date,
        author varchar(30),
        address varchar(50),
        category varchar(50)
    )';

    $retval = mysqli_query( $conn, $query );
    if(! $retval )
    {
    die('Could not create database: ' . mysqli_connect_error());
    }
    echo "Database gallery created successfully\n";
    mysqli_close($conn);
