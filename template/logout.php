<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/reset.css" />
   <link rel="stylesheet" href="../styles/default.css" />
   <title>Document</title>
</head>
<body>
<style>
   h1{
      color:white;
      text-align: center;
   }
   h2{
      color:white;
      text-align: center;
   }
   a{
      text-decoration: none;
      color:gray;
   }
   </style>
<h1>We re sorry to see you go! <br>
<h2>Click <a href="login.php">here</a> to get back to login. </h2>

<?php

// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
unset($_SESSION["username"]);
var_dump(isset($_SESSION["username"]));
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
echo 'Sorry to see you go. You can login again.';
header("location: login.php");
exit;
?>

</body>
</html>
