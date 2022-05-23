<?php
require_once("../../database/database.php");
$db = new Database();
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$address = $_POST['address'];
$description = $_POST['description'];
$db->execQuery("update gallery set `title`='$title', `author`='$author', `address`='$address',
                `description`='$description' where `id`='$id'", "Update Post not executed");
header("Location: ../../template/fourthwebsite.php", TRUE, 303);
die();
