<!DOCTYPE html>
<html>
<head>
    
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>

    <style>
         body{
        background-color: #f9f4f4;
    }
        .form a img{
        margin-top:0px;
        padding-top:0px;
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
        font-width:700;
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
        font-width:700;
    }
    .login-button{
        padding:3px;
        
    }


    </style>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into 'users' (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>


   
    <form class="form" action="" method="post">
        <a href="index.html"><img src="logo/logo2.png" alt=""></a>
        <h3 class="login-title">Registration</h3>
        <input type="text" class="login-input" name="username" placeholder="Username" required /> <br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress"> <br>
        <input type="password" class="login-input" name="password" placeholder="Password"> <br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>