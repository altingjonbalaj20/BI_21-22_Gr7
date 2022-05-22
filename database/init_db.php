<?php
    require_once('./conn.php');

    $query = 'CREATE TABLE IF NOT EXISTS gallery (
        id integer primary key auto_increment,
        description varchar(255),
        imagename varchar(500),
        create_date date,
        author varchar(30),
        address varchar(50),
        category varchar(50)
    )';

    execQuery($query, "Could not create table gallery", "Table gallery created successfully");
