<?php 

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Buying Price:</label><br>
  <input value="<?php echo $product['Buying Price'] ?>" type="text" id="buying_price" name="buying_price"><br>
  <label for="username">Selling Price:</label><br>
  <input value="<?php echo $product['Selling Price'] ?>" type="text" id="selling_price" name="selling_price"><br>
 <!--  <input type="file" name="image"><br><br> -->
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

