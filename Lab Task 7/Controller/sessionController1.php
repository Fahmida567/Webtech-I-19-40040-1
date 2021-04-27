<?php

if(!isset($_SESSION['uname']) )
{
    echo '<script>
            alert("Please Login First!");
            window.location.href = "loginView.php";
          </script>';
}



?>