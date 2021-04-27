<style>

      .error {color: #FF0000;}
    
  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}


    
    </style>
    <meta charset="utf-8">
    <title>Profile</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
   <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>


    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#" class="navbar-brand">Delete Pending Advertisemet</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <!-- <ul class="navbar-nav"> -->
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="showPendingsAddView.php" class="nav-link">Back</a> 
                   
                </li>
              <!--   <li class="nav-item">
                    <a href="viewProfileView.php" class="nav-link">View Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="editProfileView.php" class="nav-link">Edit Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="changePasswordView.php" class="nav-link">Change Password</a>
                </li> -->
                 <li class="nav-item">
                    <a href="../Controller/logoutController.php" class="nav-link">Logout</a>
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
                    <h1></h1>
                   
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</style>
<?php  
  session_start();

  if (isset($_SESSION['uname'])) {

    
  echo "";

  

}
else{
    $msg="error";
    header("location:loginView.php");
    // echo "<script>location.href='index.php'</script>";
  }
                 
?> 
<?php

require_once '../Controller/pendingAdvertisementController.php';
$products = fetchProduct($_GET['id']);

 ?>
  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <br><br> <br>   
 <form style="border:1px; border-style:solid; border-color: gray; padding: 1em;  text-align: center; font-size: 20px; background-color:green; " action="../Controller/deletePendingAddController.php" method="POST" enctype="multipart/form-data">
  <label for="location">Location:</label><br>
  <input value="<?php echo $products['LOCATION'] ?>" type="text" id="location" name="location"><br>
  <label for="address">Address:</label><br>
  <input value="<?php echo $products['ADDRESS'] ?>" type="text" id="address" name="address"><br>
  <label for="floor">Floor:</label><br>
  <input value="<?php echo $products['FLOOR'] ?>" type="text" id="floor" name="floor"><br>
  <label for="details">Details:</label><br>
  <input value="<?php echo $products['DETAILS'] ?>" type="text" id="details" name="details"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"><br>
  <input type="submit" name = "deleteAdd" value="Delete">
  <input type="reset">
</form>

</body>
</html>
</script>

</body>
</html>



</body>
</html>


</fieldset>
<div>
  </script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>
   </body>
</html>
</script>

</body>
</html>          
    </section>
   </div>
</section>

</script>

         
    </section>


</div>

