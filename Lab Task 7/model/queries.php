<?php
$mysqli = new mysqli("localhost", "root", "", "student_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT  LOCATION,ADDRESS,FLOOR, DETAILS
FROM add_details WHERE Location = ?";


$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($location, $address, $floor, $details);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Location:</th>";
echo "<td>" . $location . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Address:</th>";
echo "<td>" . $address . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Floor:</th>";
echo "<td>" . $floor . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Details:</th>";
echo "<td>" .  $details . "</td>";
echo "</tr>";
echo "</table>";
?>