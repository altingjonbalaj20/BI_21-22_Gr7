<?php
    require_once('database.php');
    $db = new Database();
    $query = 'CREATE TABLE IF NOT EXISTS gallery (
        id integer primary key auto_increment,
        title varchar(100),
        description varchar(255),
        imagename varchar(500),
        create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        author varchar(30),
        address varchar(50),
        category varchar(50)
    )';
  

    $db->execQuery($query, "Could not create table gallery");
