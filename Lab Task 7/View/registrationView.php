<?php
session_start();
include("../Controller/SessionController.php");
?>

<!DOCTYPE html>

<html>
    <head>
         <style >
      .error {color: #FF0000;}

  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}
    </style>
    
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
          
  <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
       <!--  <style>
  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}</style> -->
</head>

<body>
  <link rel="stylesheet" href="../styles/styles.css">

    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#" class="navbar-brand">Registration Page</a>
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
                   <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h1 class="promo-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bachelor Housing Management Website</h1> -->
                    <p></p>
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 

    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
           
    

<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


                    <!-- <p>subscribe easy tutorial</p> -->
                    <!-- <h1>Bachelor Housing Management Website</h1><img src="images/th4.jpg" align="top" height="700" width="1000"/> -->
                    <!-- <a herf="#"><img src="images/th7.jfif" class="play-btn">watch tutorials</a> -->
               
           
       
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../Javascript/Registration.js" ></script>
        
        <title>BHMS</title>
    </head>

    <body>
        <header>
           
        </header>
        
        <?php require("../Controller/Registration.php"); ?>

        <section>
            

            <panel>
                <h3>Registration</h3>
                <form class="form" style="float:left;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                <label for="fname"> Name:</label><span>*</span>
                <input type="text" id="fname" name="fname" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="email">Email:</label><span>*</span>
                <input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="uname">Username:</label><span>*</span>
                <input type="text" id="uname" name="uname" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="phone">Phone:</label><span>*</span>
                <input type="text" id="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="address">Address:</label><span>*</span>
                <input type="text" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="pass">Password:</label><span>*</span>
                <input type="password" id="pass" name="pass" value="" onblur="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <label for="rpass">Confirm Password:</label><span>*</span>
                <input type="password" id="rpass" name="rpass" value="" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
                <br><br>
                <input type="reset" class="button">
                <input type="submit" value="Submit" name="CreateUser" class="button">
                </form>
                <form style="margin-left:33.5%">
                <span id="fnameErr"><?php echo $fnameErr;?></span><br>
                <br><span id="emailErr"><?php echo $emailErr;?></span><br><br>
                <br><span id="unameErr"><?php echo $unameErr;?></span><br>
                <br><span id="phoneErr"><?php echo $phoneErr;?></span><br><br>
                <br><span id="addressErr"><?php echo $addressErr;?></span><br>
                <br><span id="passErr"><?php echo $passErr;?></span><br><br>
                <br><span id="rpassErr"><?php echo $rpassErr;?></span><br>
                </form>
                
            </panel>
        </section>

        </script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>
    </body>
   