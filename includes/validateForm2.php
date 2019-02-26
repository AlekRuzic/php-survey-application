<?php
 	function validateForm2() {
		$_POST['form2Errors'] = array();
		if(!isset($_POST['howPurchased'])) {
			$_POST['form2Errors']['howPurchasedError'] =  "Please provide an answer for how you completed your purchase.";
		}
		if(!isset($_POST['purchases'])) {
			$_POST['form2Errors']['purchasesError'] =  "Please select at least one purchased product";
		}
    }
?>