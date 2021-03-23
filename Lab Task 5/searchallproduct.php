
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['Name'] ?>"><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['Buying Price'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>