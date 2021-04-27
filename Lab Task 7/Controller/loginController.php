
<?php 
require_once '../model/model.php';

$uname = $pass = "";
$flag = 1;
$unameErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["uname"]))
    {
        $unameErr = "Username is required";
        $uname = "";
        $flag = 0;
    }

    else if(!SearchUser($_POST["uname"]))
    {
        $unameErr = "Username Doesn't found!";
        $uname = "";
        $flag = 0;   
    }

    else
    {
        $uname = test_input($_POST["uname"]); 
        if(empty($_POST["pass"])) 
        {
            $passErr = "Password is required";
            $pass = "";
            $flag = 0;
        }

        else if(VerifyPassword($_POST["uname"]) != $_POST["pass"])
        {
            $passErr = "Incorrect Password";
            $pass = "";
            $flag = 0;
        }

        else
        {
            $pass = test_input($_POST["pass"]);
        }
    }

    
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Login']) && $flag==1) {
    
    $_SESSION["uname"] = $uname;
    $_SESSION["pass"] = $pass;
    echo ' <script>
            alert("Succesfully login..");
            window.location.href = "dashboardView.php";
           </script> ';

}



?>