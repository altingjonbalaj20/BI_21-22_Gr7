<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../styles/default.css" />   
    <link rel="stylesheet" href="../styles/thirdwebsite/secondwebsite.css" />  
    </head>
    <body>

    <style>
        form{
            display:grid;
            width: 30vw;
            margin-left: 30vw;
            margin-bottom: 3vw;
            margin-top: 3vw;
        }
        form input, button{
            background-color: #5f5f5f;
            border: 1px solid white;
            height: 50px;
            border-radius: 10px;
            padding: 10px;
            color:white;
        }
        label{
            color:white;
        }
        #pa{
            margin-right: 5px;
        }
      
        a{
            color:white;
            text-decoration: none;

        }
        .error{
            color:white;
        
        }
        
    </style>
    <?php
    include('../partials/_header.php');
    
    
    session_start();
 
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: firstwebsite.php");
        exit;
    }
     
    // Include config file
    require_once ('../database/login_db.php');
     
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = $login_err = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT id, username, password FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            var_dump(password_verify($password, $hashed_password));
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                                
                                // Redirect user to page
                                header("location: firstwebsite.php");
                            } else{
                                // Password is not valid, display a generic error message
                                $login_err = "Invalid username or password.";
                                echo 'rip';
                            }
                        }
                    } else{
                        // Username doesn't exist, display a generic error message
                        $login_err = "Invalid username or password.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        
        // Close connection
        mysqli_close($conn);
    }
    ?>
       
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">

        <label>Username:</label>

        <input type="text" name="username" placeholder="Name" requred autofocus>

        <label id="pa">Password:</label>
        

        <input type="password" name="password" placeholder="Password" required><br> 

        <input type="submit" value="Login">
        
    </form>
    

    <?php
        include('../partials/_footer.php')
    ?>
  
    </body>
</html>