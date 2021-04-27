<?php

require_once ('../model/model.php');


function fetchAllProducts(){
	return showSendPaymentView();

}
function fetchProduct($id){
	return showPaymentSend($id);

}
?>
