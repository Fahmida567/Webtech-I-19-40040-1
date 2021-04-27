<?php

$conn = mysqli_connect("localhost", "root", "", "student_db");
$sql = "SELECT * FROM employee WHERE first_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['first_name']."</td>
		          <td>".$row['last_name']."</td>
		          <td>".$row['Email']."</td>
		          <td>".$row['Address']."</td>
		           <td>".$row['Phone No']."</td>
		           
		        </tr>";
	}
}
else{
	echo "<tr><td>No result's found</td></tr>";
}

?>