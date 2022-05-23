<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Third Website</title>
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
    
        
    </style>
    <?php
    include('../partials/_header.php');
    require_once ('../database/login_db.php');
    ob_start();
    session_start();
    $msg = '';
            
    if (isset($_POST['login']) && !empty($_POST['username']) 
       && !empty($_POST['password'])) {
        
       if ($_POST['username'] == 'ArtaGashi' && 
          $_POST['password'] == 'gashigashi') {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = 'ArtaGashi';
          
          echo 'You have entered valid use name and password';
       }else {
          $msg = 'Wrong username or password';
          header("Location: login.php");
       }
    }


    ?>
  
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">

        <label>Username:</label>

        <input type="text" name="username" placeholder="User Name" required autofocus><br>

        <label id="pa">Password:</label>

        <input type="password" name="password" placeholder="Password" required><br> 

        <button type="submit" name="login">Login</button>
    </form>
    
    <a id="sess" href = "logout.php" title = "Logout">
        Click here to clean your Session 
    </a>

    <?php
        include('../partials/_footer.php')
    ?>
  
    </body>
</html>