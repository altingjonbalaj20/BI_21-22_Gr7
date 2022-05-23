<?php
    require_once('database.php');
    $db = new Database(false);
    $schema = 'db_bi';
    $query = 'create schema if not exists ' . $schema;
    $db -> execQuery($query, "Could not create schema " . $schema);

    $db -> setDB($schema);

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

    $db -> setDB(null);
    $schema = 'formsdata';
    $query = 'create schema if not exists ' . $schema;
    $db -> execQuery($query, "Could not create schema " . $schema);
    $db -> setDB($schema);
    $query = 'create table if not exists Users_data(
        id int primary key auto_increment,
        fname varchar(255), 
        lname varchar(255), 
        email varchar(255), 
        messagee varchar(255)
    )';
    $db -> execQuery($query, "Could not create table Users_data");
