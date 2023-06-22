<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<style>
    body{
        background-color: #f9f4f4;
    }
    .form a img{
        width: 150px;
        display:block;
        margin-left:Auto;
        margin-right:Auto;
    }
    .form{
        width:200px;
        margin-top:30px;
        display:block;
        margin-left:Auto;
        margin-right:Auto;
        padding-left:60px;
        

    }

    .form h3{
        font-weight: 700;
        display:block;
        margin-left:Auto;
        margin-right:Auto;
        padding-bottom:20px;

    }

    .form input{
        margin-bottom:15px;
        font-size:15px;
        height: 25px;
    }
    .form {
        border:1px solid  #eeeee4;
        border-radius:7px;
        padding:60px;
        background-color:white;
      

    }

   .form p a{
        color:black;
        font-weight: 700;   
 }
    .login-button{
        padding:3px;
        
    }
</style>


<body>


<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query  = "SELECT * FROM 'users' WHERE username= '$username'  AND password=' " . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
       <a href="index.html"> <img src="logo/logo2.png" alt=""></a> 
        <h3 class="login-title">Login</h3>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/> <br>
        <input type="password" class="login-input" name="password" placeholder="Password"/> <br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>

  </form>


<?php
    }
?>


</body>
</html>