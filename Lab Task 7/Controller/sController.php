<?php

require_once '../Model/model.php';

if (deleteAdv($_POST['id'])) {
    header('Location: ../View/showSendPaymentView.php');
      

}

 ?>