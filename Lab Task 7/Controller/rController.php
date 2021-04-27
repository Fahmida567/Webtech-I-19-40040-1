<?php

require_once '../Model/model.php';

if (deleteAddd($_POST['id'])) {
    header('Location: ../View/showReceivePaymentView.php');

}

 ?>