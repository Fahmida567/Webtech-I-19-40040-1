<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend><h1>Add Product</h1></legend>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Buying Price:</label><br>
  <input type="text" id="buying_price" name="buying_price"><br>
  <label for="username">Selling Price:</label><br>
  <input type="text" id="selling_price" name="selling_price"><br>
  <input type="checkbox" id="display" name="display" value="display">
<label for="display"> Display</label><br><br>
 <!--  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="file" name="image"><br><br> -->
  <input type="submit" name = "createProduct" value="Save">
  <!-- <input type="reset">  -->
</form> 
</fieldset>

</body>
</html>

