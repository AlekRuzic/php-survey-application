<?php
 	function validateForm3() {
        $_POST['form3Errors'] = array();
        if((in_array('homePhone', $_SESSION['purchases'])) && !isset($_POST['satisfaction_homePhone'])) {
            $_POST['form3Errors']['satisfaction_homePhone'] = "Please provide a satisfaction response for the home phone purchase";
        }
        if((in_array('mobilePhone', $_SESSION['purchases'])) && !isset($_POST['satisfaction_mobilePhone'])) {
            $_POST['form3Errors']['satisfaction_mobilePhone'] = "Please provide a satisfaction response for the mobile phone purchase";
        }
        if((in_array('tablet', $_SESSION['purchases'])) && !isset($_POST['satisfaction_tablet'])) {
            $_POST['form3Errors']['satisfaction_tablet'] = "Please provide a satisfaction response for the tablet purchase";
        }
        if((in_array('desktop', $_SESSION['purchases'])) && !isset($_POST['satisfaction_desktop'])) {
            $_POST['form3Errors']['satisfaction_desktop'] = "Please provide a satisfaction response for the desktop purchase";
        }
        if((in_array('smartTV', $_SESSION['purchases'])) && !isset($_POST['satisfaction_smartTV'])) {
            $_POST['form3Errors']['satisfaction_smartTV'] = "Please provide a satisfaction response for the smart tv purchase";
        }
        if((in_array('laptop', $_SESSION['purchases'])) && !isset($_POST['satisfaction_laptop'])) {
            $_POST['form3Errors']['satisfaction_laptop'] = "Please provide a satisfaction response for the laptop purchase";
        }
        if((in_array('homeTheater', $_SESSION['purchases'])) && !isset($_POST['satisfaction_homeTheater'])) {
            $_POST['form3Errors']['satisfaction_homeTheater'] = "Please provide a satisfaction response for the home theater purchase";
        }

        if((in_array('homeTheater', $_SESSION['purchases'])) && ($_POST['recommend_homeTheater'] == "")) {
            $_POST['form3Errors']['recommend_homeTheater'] = "Please provide a recommendation response for the home theater purchase";
        }
        if((in_array('homePhone', $_SESSION['purchases'])) && ($_POST['recommend_homePhone'] == "")) {
            $_POST['form3Errors']['recommend_homePhone'] = "Please provide a recommendation response for the home phone purchase";
        }
        if((in_array('tablet', $_SESSION['purchases'])) && ($_POST['recommend_tablet'] == "")) {
            $_POST['form3Errors']['recommend_tablet'] = "Please provide a recommendation response for the tablet purchase";
        }
        if((in_array('desktop', $_SESSION['purchases'])) && ($_POST['recommend_desktop'] == "")) {
            $_POST['form3Errors']['recommend_desktop'] = "Please provide a recommendation response for the desktop purchase";
        }
        if((in_array('smartTV', $_SESSION['purchases'])) && ($_POST['recommend_smartTV'] == "")) {
            $_POST['form3Errors']['recommend_smartTV'] = "Please provide a recommendation response for the smart TV purchase";
        }
        if((in_array('laptop', $_SESSION['purchases'])) && ($_POST['recommend_laptop'] == "")) {
            $_POST['form3Errors']['recommend_laptop'] = "Please provide a recommendation response for the latop purchase";
        }
        if((in_array('mobilePhone', $_SESSION['purchases'])) && ($_POST['recommend_mobilePhone'] == "")) {
            $_POST['form3Errors']['recommend_mobilePhone'] = "Please provide a recommendation response for the mobile phone purchase";
        }
    }
?>