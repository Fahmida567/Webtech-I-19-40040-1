
<!DOCTYPE html>
<html>
<head>
	<fieldset>
    <h2>ABC Company</h2>

  <meta charset="UTF-8">
  <title>Title of the document</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <h4><div class="menu">
<?php include 'menuView.php';?>
</div></h4>
  
  
</head>
 

<?php 
     session_start() ;
     ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Title of the document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	
	<br>
	<fieldset>
<?php
  $_SESSION['username']="Welcome to ABC company";
  echo $_SESSION['username'];




?>
<?php include 'footerView.php'; ?>

</fieldset>
</fieldset>
</body>
</html>