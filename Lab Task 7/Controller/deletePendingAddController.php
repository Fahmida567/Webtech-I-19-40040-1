<?php

require_once '../Model/model.php';

if (deleteAdd($_POST['id'])) {
    header('Location: ../View/showPendingsAddView.php');

}

 ?>