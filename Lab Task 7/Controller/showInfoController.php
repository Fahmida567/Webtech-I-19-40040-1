<?php

require_once ('../model/model.php');

function fetchAllProducts(){
	return showAllAddView();

}
// function fetchAllProducts(){
// 	return showAllAdvertisementsView();

// }
function fetchProduct($id){
	return showProduct($id);

}
?>
