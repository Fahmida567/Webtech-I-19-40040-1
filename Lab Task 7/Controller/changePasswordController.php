<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['uname']))
{
  $cpassword=$npassword=$rnpassword="";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["cpassword"])) {
       echo "Current Password is required";
        echo("<br><br><br><br>");
       $flag=0;
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);


        }


 if(empty($_POST["npassword"]))
 {
   echo "Password is required";
    echo("<br><br><br><br>");
   $flag=0;
 }
 else {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<8)
   {
     echo "Password must not be less than eight (8) characters";
      echo("<br><br><br><br>");
     $flag=0;
   }
   else {
     if(substr_count($npassword,"@")<1 || substr_count($npassword,"#")<1 || substr_count($npassword,"%")<1 || substr_count($npassword,"$")<1)
     {
       echo "Password must contain at least one of the special characters (@, #, $,%)";
        echo("<br><br><br><br>");
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
   echo "Password is required";
    echo("<br><br><br><br>");
   $flag=0;
 }
 else {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<8)
   {
     echo "Password must not be less than eight (8) characters";
      echo("<br><br><br><br>");
     $flag=0;
   }
   else {
     if(substr_count($rnpassword,"@")<1 || substr_count($rnpassword,"#")<1 || substr_count($rnpassword,"%")<1 || substr_count($rnpassword,"$")<1)
     {
       echo "Password must contain at least one of the special characters (@, #, $,%)";
        echo("<br><br><br><br>");
       $flag=0;
     }
   }
 }



  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['uname']);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['Password'] ;
        endforeach;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePasswordStudent($_SESSION['uname'], $npassword)) {
            echo 'Successfully updated....';
           session_destroy();
            header('Location: ../View/loginView.php');
          }
          else {
            echo "Update failed....";
          }
        }
        else {
          echo "New password and retype password is not same....";
           echo("<br><br><br><br>");
        }
        }
        else {
          echo "Incorrect Password";
           echo("<br><br><br><br>");
        }
      }else {
        echo "Username not found";
         echo("<br><br><br><br>");
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
}

else {
  echo "You are not allowed to access this page";
}




?>