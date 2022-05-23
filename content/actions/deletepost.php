<?php
    require_once("../../database/database.php");
    $db = new Database();
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $db -> execQuery("delete from gallery where id='$id'", "$id doest not exist in database or database internal error");
    }
    header("Location: ../../template/fourthwebsite.php", TRUE, 303);
    exit();
?>