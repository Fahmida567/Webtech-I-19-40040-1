<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Sorted Advertisements</title>

 <form style="border:1px; border-style:solid; border-color: gray;   text-align: center; font-size: 26px; background-color: gray; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<form style="border:1px; border-style:solid; border-color: gray; padding: 1em;  text-align: center; font-size: 20px; background-color:gray; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<h1 style=" font: bold; font-size: 50px; float: middle; font-family: Cursive;text-align: center; border: 10px ">Bachelor’s Housing Management Website</h1>
<h2>Sorted Advertisements</h2>
</form>
</head>
</html>
<form style="border:1px; border-style:solid; border-color: gray;   text-align: center; font-size: 26px; background-color: lightgray; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php

   $jsondata = file_get_contents("../Json/Sorting.json");
   $json = json_decode($jsondata,true);
   $output ="<tr>";
   foreach($json['Properties'] as $property){
      $output .= "<h4>".$property['Location']."</h4>";
      $output .= "<h4>Address: ".$property['Address']."</dl>";
      $output .= "<dl>Floor: ".$property['Floor']."</dl>";
      $output .= "<dl>Details of the flat: ".$property['Details of the flat']."</dl>";


   }

   $output .="</tr>";
   echo $output;

   ?>
  
 
 <h1 style="border:1px; border-style:solid; border-color: gray; padding: 1em;  text-align: center; font-size: 20px; background-color:rgb();"
<?php include 'footerView.php';?>
