<?php

require_once ('../model/model.php');


function fetchAllProducts(){
	return showPendingsAddView();


}
function fetchProduct($id){
	return showPendingAdd($id);

}

?>
