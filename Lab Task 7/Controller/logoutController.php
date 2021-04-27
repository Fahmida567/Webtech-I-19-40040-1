<?php
session_start();
if(isset($_SESSION['uname']))
{
  session_destroy();
  header('Location:../View/loginView.php');
}
{
  echo "You can not access this page.";
}
 ?>