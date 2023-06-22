<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>


<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CSE Hacks</title>

    <!--Favicon-->
    <link style="border-radius: 7px;" href="logo/logo2.png" width="60px" rel="icon">
    <link style="border-radius: 7px;" href="logo/logo2.png" width="60px" rel="apple-touch-icon">

    <!---------Css-------->

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

    <!-----Google font----->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Sofia+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@400;700&             display=swap" rel="stylesheet">

    <!-----Fontawesome----->
    <link rel="stylesheet" href="https://kit.fontawesome.com/f4de1cba20.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f4de1cba20.js" crossorigin="anonymous"></script>

    <!------Bootstrap------>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body class="body">


<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>  




</body>

</html>