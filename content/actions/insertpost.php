<?php
require_once('saveimage.php');
require_once('../../database/database.php');
$title = $_POST['title'];
$author = $_POST['author'];
$address = $_POST['address'];
$description = $_POST['description'];
$category = $_POST['category'];
$imagename = $_FILES["fileToUpload"]["name"];

$db = new Database();

$insertQuery = "insert into gallery(title, author, address, description, category, imagename) 
                values ('$title', '$author', '$address', '$description', '$category', '$imagename')";
$db->execQuery($insertQuery, "Post could not be inserted in database");
header("Location: ../../template/fourthwebsite.php", TRUE, 303);
exit();
