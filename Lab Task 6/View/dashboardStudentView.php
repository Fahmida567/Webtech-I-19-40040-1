   <fieldset>
<legend>DASHBOARD</legend>

<?php
session_start();



if (isset($_POST['uname'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
    $_SESSION['uname'] = $username;
    header("location:Dashboard.php");
  }
  else{
    $msg="username or password invalid";
    echo "<script>alert('uname or pass incorrect!')</script>";
  }

} 

?> 
     <ul><li><a href="dashboardStudentView.php">Dashboard</a></li>
		<li><a href="viewProfileStudentView.php">View Profile</a></li>
		<li><a href="editProfileStudentView.php">Edit Profile</a></li>
        <li><a href="changePasswordStudentView.php">Change Password</a></li>
		<li><a href="../Controller/logoutStudentController.php">Logout</a></li>
		</li></ul>
		


<?php echo "<h2>Welcome Fahmida</h2>"; ?>
<?php 
 include 'footerView.php';?>
 
 
  




</body>
</html>

