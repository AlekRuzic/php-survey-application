<?php
    /* this file performs the validation checks for the first form.
       authors: Alek, Lillian, Lyniker, Jane, Wen */

    function validateForm1(){
        $_POST['form1Errors'] = array();
       		if (!isset($_POST['fullName'])){
               		$_POST['form1Errors']['fullNameError'] = "Full Name field not defined";
       		} else if (isset($_POST['fullName'])){
                	$fullName = trim($_POST['fullName']);
        	        if (empty($fullName)){
                	        $_POST['form1Errors']['fullNameError'] = "The Full Name field is empty";
			} else {
                	        if (strlen($fullName) >  128){
                        	        $_POST['form1Errors']['fullNameError'] = "The Full Name field contains too many characters";
                       		}
               		}
        	}

            if (!isset($_POST['age'])){
                    $_POST['form1Errors']['ageError'] = "Age field not defined";
            } else if (isset($_POST['age'])){
                    $age = trim($_POST['age']);
                    if (empty($age)){
                            $_POST['form1Errors']['ageError'] = "Age field is empty";
                    } else {
                            if (strlen($age) >  11){
                                    $_POST['form1Errors']['ageError'] = "The Age field contains too many characters";
                            }
                    }
            }

            if ($_POST['student'] == "") {
                $_POST['form1Errors']['studentError'] = " Please select an answer for 'Are you a student?'";

            }
    }
?>
