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
        .s_r{
            margin-top:20px;
        }
    
        
    </style>
    <?php
    include('../partials/_header.php');
    require_once ('../database/login_db.php');
    
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Validate username
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter a username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
            $username_err = "Username can only contain letters, numbers, and underscores.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = trim($_POST["username"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = trim($_POST["username"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        
        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
        
        // Check input errors before inserting in database
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
             
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
                
                // Set parameters
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: login.php");
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
     <div class="wrapper">
    
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
                    <label>Username</label>
                    <input type="text" name="username" value="">
  
                    <label>Password</label>
                    <input type="password" name="password"  value="">

                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control ">
                
                

                    <input class="s_r" type="submit"  value="Submit">
                    <input  class="s_r" type="reset"  value="Reset">

                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>    
 
<?php
  include('../partials/_footer.php');
?>

    
</body>
</html>