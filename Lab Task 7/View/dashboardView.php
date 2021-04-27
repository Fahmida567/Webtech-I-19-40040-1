<?php
session_start();
include("../Controller/sessionController1.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <body>

</body>
</html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>


    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#" class="navbar-brand">Dashboard</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <!-- <ul class="navbar-nav"> -->
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="viewProfileView.php" class="nav-link">View Profile</a> 
                   
                </li>
                <li class="nav-item">
                    <a href="editProfileView.php" class="nav-link">Edit Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="changePasswordView.php" class="nav-link">Change Password</a>
                </li>
                  <li class="nav-item">
                    <a href="../Controller/logoutController.php" class="nav-link">Log out</a>
                </li>

                   
                </li>
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
                   <!--  <h1 class="promo-title">Bachelor Housing Management Website</h1>
                    <p>This is a website for students or bachelors.</p> -->
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <title>BHMS</title>
    </head>

    <body>
        <header>
            
            <?php include("../Controller/sessionController1.php")?>
        </header>
    

        <section>
            

            <panel>
                <h1 style="float:center;"> Welcome <?php echo $_SESSION["uname"]; ?></h1>
                <br style="clear:both;">
                

                </table>
            </panel>
        </section>

        </body>
</html> 

<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


                    <!-- <p>subscribe easy tutorial</p> -->
                    <!-- <h1>Bachelor Housing Management Website</h1><img src="images/th4.jpg" align="top" height="700" width="1000"/> -->
                    <!-- <a herf="#"><img src="images/th7.jfif" class="play-btn">watch tutorials</a> -->
                </div>
           
               <!--  <div class="col-md-6 text-center"> -->
                
                
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: green;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a>

 </li>
    <div class="jumbotron text-center">
  <h1>Bachelor Housing Management Website  </h1> 
 
 </div>
        <li><a href="showAllAddView.php">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">

      <h2></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li><br><br>
        <li><a href="showAllAddView.php">Advertisement Details</a></li>
        <li><a href="sortView.php">Sort Advertisement</a></li>
        <li><a href="showAllAdvertisementsView.php">Delete Advertisement</a></li>
        <li><a href="showPendingsAddView.php">Verify Advertisement</a></li>
         <li><a href="showReceivePaymentView.php">Receive Payment</a></li>
          <li><a href="showSendPaymentView.php">Send Payment</a></li>
          <li><a href="indexView.php">Contact Information</a></li>
      </ul><br>
    </div>
    <br>
    <style>
.mySlides {display:none;}
</style>
</head>

<body>

<h2 class="w3-center"></h2>
    <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="../images/th4.jpg" style="width:140%">
  <img class="mySlides" src="../images/th1.jpg" style="width:140%">
  <img class="mySlides" src="../images/th2.jpg" style="width:140%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    <!-- <form style=" text-align: center; font-size: 15px; background-color:#FFFAFA; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 -->
   <!--   <form style=" text-align: center; font-size: 15px; background-color:#FFFAFA; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->

   <!--  <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3"> -->
        <!--   <div class="jumbotron text-center">
  <h2>Bachelor Housing Management Website  </h2> 
 
 </div> -->
          <!-- <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
              
           
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: green;
    color: #fff;
  }
  </style>
</head>
<body>

  <p></p>
 


 <!-- <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="dashboardView.php">Back to Dashboard</a></li>
        <li><a href="showAllAddView.php">Sort Advertisement</a></li>
        <li><a href="showAllAdvertisementsView.php">Delete Advertisement</a></li>
        <li><a href="#">Verify Advertisement</a></li>
      </ul>
    </div>
  </div>
</nav>
 -->
<!-- <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboardView.php">Back to Dashboard</a></li>
        <li><a href="showAllAddView.php">Sort Advertisement</a></li>
        <li><a href="showAllAdvertisementsView.php">Delete Advertisement</a></li>
        <li><a href="#section3">Verify Advertisement</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9"> -->
     <!--  <div class="well"> -->
       <!DOCTYPE html>



    
 <!-- <form style="border:1px; border-style:solid; border-color: gray; padding: 0.5em;  text-align: center; font-size: 15px; background-color:#FFFAFA; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->
 <!-- <a style="font-size: 20px;
      margin: 10px 20px;
  cursor: pointer;
   background-color:green;
  border: none;
  color: white;
   padding: 10px 20px;
  text-align: center;
  display: inline-block;" href= "ManageView.php">Manage Advertisement</a>&nbsp;&nbsp;&nbsp;

  <a style="font-size: 20px;
   margin: 10px 20px;
  cursor: pointer;
   background-color: green;
  border: none;
  color: white;
   padding: 10px 20px;
  text-align: center;
  display: inline-block;"  href= "transactions.php">Manage Payment</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
 <!-- <!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<h2 class="w3-center"></h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="../images/th4.jpg" style="width:130%">
  <img class="mySlides" src="../images/th1.jpg" style="width:130%">
  <img class="mySlides" src="../images/th2.jpg" style="width:130%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>

  </script> -->

</body>
</html>          
    </section>
   <!--  <section id="pictures">
        <div class ="container">
            <div class="row text-center">
                <div class="col-md-4 services">
                    <img src="images/th1.jpg" class="service.img">
                    <h4></h4>
                </div>
                     -->
               

    
 <!-- <div class="row">
    <div class="col-sm-4 left">This is the left side</div>

     <div class="col-sm-4 center">This is the left side</div>

    <div class="col-sm-4 right">This is the right side</div>
</div>
<div class="row">
    <div class="col-sm-4 left">This is the left side</div>

    <div class="col-sm-4 center"><img class="img-responsive"src="images/th4.jpg"></div>
    <div class="col-sm-4 right">This is the right side</div>
</div> -->





  <!-- Content here -->
</div>
</body>

</html>


 
<!-- <form style=" text-align: center; font-size: 15px; background-color:#FFFAFA; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 -->
  <!-- Content here -->
<div>
  <?php 
 include 'footerView.php';?>

</div>

         
    
            
    </body>