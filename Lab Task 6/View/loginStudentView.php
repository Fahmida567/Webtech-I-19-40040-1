<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <fieldset>
<legend>LOGIN</legend>
    <form method="post" action="../Controller/loginStudentController.php">
        User Name: <input type="text" name="username">
        <br><br>
        Password: <input type="text" name="password">
        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="forget password.php">Forget Password? </a></meta>
        <?php 
 include 'footerView.php';?>
      </fieldset>
    </form>
  </body>
</html>