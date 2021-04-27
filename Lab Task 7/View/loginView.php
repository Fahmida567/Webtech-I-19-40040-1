<?php
session_start();
include("../Controller/SessionController.php");
?>

<!DOCTYPE html>

<html>
    <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <style>
  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}</style>
</head>

<body>
  <link rel="stylesheet" href="../styles/styles.css">

    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#" class="navbar-brand">Login Page</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <!-- <ul class="navbar-nav"> -->
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"></a> 
                   
                </li>
                <li class="nav-item">
                    <a href="registrationView.php" class="nav-link">Registration</a>
                </li>
            </ul>
        </div>

    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <section id="banner">
        <div class ="container">
            <div class="row">
                <div class="col-md-10">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h1 class="promo-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bachelor Housing Management Website</h1>
                    <p></p>
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style> -->
    <meta charset="utf-8">
    <title></title>
  </head>
  
  <body>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <title>BHMS</title>
        <script src="../Javascript/Login.js"></script>
    </head>

    <body>
        <header>
           
        </header>
        
        <?php require("../Controller/loginController.php"); ?>

        <section>
          

                <h3>Login</h3>
                <form class="form" name="login" style="float:left;" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="uname">Username:</label>
                <input type="text" id="uname" name="uname" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)" ><br><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" value="" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)"><br><br>
                <input type="submit" value="Submit" name="Login" class="button">
                </form>
                <form style="margin-left:33.5%">
                <span id="unameErr"><?php echo $unameErr;?></span><br>
                <br><span id="passErr"><?php echo $passErr;?></span><br>
                </form>
          
        </section>
</script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>


    </body>