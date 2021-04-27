<?php
session_start();
include("../Controller/sessionController1.php");
?>
<!DOCTYPE html>
 <style>
  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}</style>
<html lang="en">
<head>
  <title>Live Search</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>


    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#" class="navbar-brand">Contact Information</a>
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>

<!-- <div class="jumbotron text-center"> -->

  <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search for a contact</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Address</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody id="output">
        
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'../model/search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>


    </body>