<?php
session_start();
include("../Controller/sessionController1.php");
?>

<!DOCTYPE html>
 <style >
    
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
    <title>Add Details</title>
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
        <a href="#" class="navbar-brand"></a>
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
                    <a href="dashboardView.php" class="nav-link">Back</a>
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
 
<html>
    <head>
        
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <title>Advertisement Details</title>
        <script src="../Javascript/addDetails.js"></script>
    </head>

    <body>
        <header>
           
        </header>
        
        

        <section>
            
            <panel>
                <h2>Advertisement Details</h2>
                <form action=""> 
                <select name="Owners" onchange="showLocation(this.value)">
                    <option value="">Select an advertisement:</option>
                    <option value="Gulshan">Gulshan,Road:02,House no:09</option>
                    <option value="Banani"value="Banani">Banani,Road:02,House no:09</option>
                    <option value="Dhanmondi">Dhanmondi,Road:02,House no:09</option>
                    <option value="Mohammadpur">Mohammadpur,Road:02,House no:09</option>
                    <option value="Uttara">Uttara,Road:02,House no:09</option>
                    <option value="Farmgate">Farmgate,Road:05,House no:10</option>
                     <option value="Mirpur">Mirpur,Road:11,House no:05</option>
                      <option value="Bashundhara">Bashundhara,Block:C,Road No:05</option>
                       <!-- <option value="Banani1"value="Banani">Banani,Road:05,House no:10</option> -->
                     <!--   <option value="Mohammadpur1">Mohammadpur,Road:07,House no:08</option> -->


                </select>
                </form>
                <br>
                <div id="instruction">Select an advertisement for more details.....</div><br><br>
                
            </panel>
        </section>

       
    </body>
    </script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>


    </body>