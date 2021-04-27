<?php

if(isset($_SESSION['uname']))
{
    echo '<script>
            window.location.href = "dashboardView.php";
        </script>';
}

?>