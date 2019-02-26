<?php
    /* this is the main page that the entire wizard runs on. All the forms are loaded into this page
       and all the logic for what shows up on this page is in this file. 
       authors: Alek, Lillian, Lyniker, Wen, Jane */

   session_start(); ?>

<html>
<head>
<title>Survey Project</title>
<link href="./css/styles.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<div id="infoDiv">
<h1> Lamp 1 Survey </h1>
</div>

<?php

    require_once("./includes/homepage.php");
    require_once("./includes/form1.php");
    require_once("./includes/validateForm1.php");
    require_once("./includes/form2.php");
    require_once("./includes/validateForm2.php");
    require_once("./includes/form3.php");
    require_once("./includes/validateForm3.php");
    require_once("./includes/summary.php");
    require_once("./includes/submitForm.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //if user clicks next
	    if (isset($_POST['nextButton']) && $_SESSION['part'] == 1) {
            $_SESSION['part'] = 2;
	    header('Location: index.php');
        }
        else if (isset($_POST['nextButton']) && $_SESSION['part'] == 2) {
		validateForm1();
            if (count($_POST['form1Errors']) == 0) {
                    $_SESSION['fullName'] = $_POST['fullName'];
                    $_SESSION['age'] = $_POST['age'];
                    $_SESSION['student'] = $_POST['student'];
                    $_SESSION['part'] = 3;
                    header('Location: index.php');
                }
            else {
                    form1();
            }
        }
        else if (isset($_POST['nextButton']) && $_SESSION['part'] == 3) {
            validateForm2();
            if (count($_POST['form2Errors']) == 0) {
                $_SESSION['howPurchased'] = $_POST['howPurchased'];
                $_SESSION['purchases'] = $_POST['purchases'];
                $_SESSION['part'] = 4;
		        header('Location: index.php');
            }
            else {
                    form2();
            }
        }
        else if (isset($_POST['nextButton']) && $_SESSION['part'] == 4) {
            validateForm3();
            if(count($_POST['form3Errors']) == 0) {
                if (isset($_POST['satisfaction_homePhone'])) {
                    $_SESSION['satisfaction_homePhone'] = $_POST['satisfaction_homePhone'];
                }
                if (isset($_POST['satisfaction_mobilePhone'])) {
                    $_SESSION['satisfaction_mobilePhone'] = $_POST['satisfaction_mobilePhone'];
                }
                if (isset($_POST['satisfaction_smartTV'])) {
                    $_SESSION['satisfaction_smartTV'] = $_POST['satisfaction_smartTV'];
                }
                if (isset($_POST['satisfaction_laptop'])) {
                    $_SESSION['satisfaction_laptop'] = $_POST['satisfaction_laptop'];
                }
                if (isset($_POST['satisfaction_desktop'])) {
                    $_SESSION['satisfaction_desktop'] = $_POST['satisfaction_desktop'];
                }
                if (isset($_POST['satisfaction_tablet'])) {
                    $_SESSION['satisfaction_tablet'] = $_POST['satisfaction_tablet'];
                }
                if (isset($_POST['satisfaction_homeTheater'])) {
                    $_SESSION['satisfaction_homeTheater'] = $_POST['satisfaction_homeTheater'];
                }

                if (isset($_POST['recommend_homePhone'])) {
                    $_SESSION['recommend_homePhone'] = $_POST['recommend_homePhone'];
                }
                if (isset($_POST['recommend_mobilePhone'])) {
                    $_SESSION['recommend_mobilePhone'] = $_POST['recommend_mobilePhone'];
                }
                if (isset($_POST['recommend_smartTV'])) {
                    $_SESSION['recommend_smartTV'] = $_POST['recommend_smartTV'];
                }
                if (isset($_POST['recommend_laptop'])) {
                    $_SESSION['recommend_laptop'] = $_POST['recommend_laptop'];
                }
                if (isset($_POST['recommend_desktop'])) {
                    $_SESSION['recommend_desktop'] = $_POST['recommend_desktop'];
                }
                if (isset($_POST['recommend_tablet'])) {
                    $_SESSION['recommend_tablet'] = $_POST['recommend_tablet'];
                }
                if (isset($_POST['recommend_homeTheater'])) {
                    $_SESSION['recommend_homeTheater'] = $_POST['recommend_homeTheater'];
                }
                $_SESSION['part'] = 5;
                header('Location: index.php');
            }
            else {
                form3();
            }
        }
        else if (isset($_POST['nextButton']) && $_SESSION['part'] == 5) {
            submitForm();
            echo "Form Submitted";
        }

      //if user clicks previous
	    if (isset($_POST['previousButton']) && $_SESSION['part'] == 2) {
	        homepage();
            $_SESSION['part'] = 1;
        }
        else if (isset($_POST['previousButton']) && $_SESSION['part'] == 3) {
            form1();
            $_SESSION['part'] = 2;
        }
        else if (isset($_POST['previousButton']) && $_SESSION['part'] == 4) {
            form2();
            $_SESSION['part'] = 3;
        }
        else if (isset($_POST['previousButton']) && $_SESSION['part'] == 5) {
            form3();
            $_SESSION['part'] = 4;
        }

    }

   else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	if (!isset($_SESSION['part'])) {
           homepage();
           $_SESSION['part'] = 1;
	}
	else if ($_SESSION['part'] == 1) {
	   homepage();
	}
	else if ($_SESSION['part'] == 2) {
	   form1();
	}
	else if ($_SESSION['part'] == 3) {
	   form2();
	}
	else if ($_SESSION['part'] == 4) {
	   form3();
    }
    else if ($_SESSION['part'] == 5) {
       summary();
    }
    else if ($_SESSION['part'] == 6) {
       submitForm();
    }
   }

?>
</body>
</html>

