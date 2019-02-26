<?php
/* displays 2nd form in the survey
   authors: Alek, Lillian, Lyniker, Jane, Wen */

     function form2() { ?>
        <form method="POST" class="formWrap">
                <label for="howPurchased">How did you complete your purchase?</label></br>
                    <?php checkHowPurchased(); ?>
                <?php if (isset($_POST['form2Errors']) && isset($_POST['form2Errors']['howPurchasedError'])) {
                    echo $_POST['form2Errors']['howPurchasedError'];
                } ?>
                </br>
                <label for="purchases">Which of the following did you purchase?</label></br>
                    <?php checkPurchases(); ?>
                <?php if (isset($_POST['form2Errors']) && isset($_POST['form2Errors']['purchasesError'])) {
                    echo $_POST['form2Errors']['purchasesError'];
                } ?>
                <div class="buttonsDiv">
                <button type="submit" name="previousButton">Previous</button>
                <button type="submit" name="nextButton">Next</button>
                </div>
        </form>
<?php }

function checkHowPurchased() {
    if (!isset($_SESSION['howPurchased']) && !isset($_POST['howPurchased'])) {
            echo "
            <input type='radio' name='howPurchased' value='online'>Online</input></br>
            <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
            <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
            <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
    }

    else if (isset($_SESSION['howPurchased'])) {
        if ($_SESSION['howPurchased'] == 'online') {
                echo "
                <input type='radio' name='howPurchased' value='online' checked='checked'>Online</input></br>
                <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
                <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
                <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        }
        else if ($_SESSION['howPurchased'] == 'byPhone') {
            echo "
                <input type='radio' name='howPurchased' value='online'>Online</input></br>
                <input type='radio' name='howPurchased' value='byPhone' checked='checked'>By phone</input></br>
                <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
                <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        }
        else if ($_SESSION['howPurchased'] == 'mobileApp') {
            echo "
                <input type='radio' name='howPurchased' value='online'>Online</input></br>
                <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
                <input type='radio' name='howPurchased' value='mobileApp' checked='mobileApp'>Mobile app</input></br>
                <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        }
        else if ($_SESSION['howPurchased'] == 'inStore') {
            echo "
                <input type='radio' name='howPurchased' value='online'>Online</input></br>
                <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
                <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
                <input type='radio' name='howPurchased' value='inStore' checked='inStore'>In store</input></br>";
        }
    }

    else if (isset($_POST['howPurchased'])) {
        if ($_POST['howPurchased'] == 'online') {
            echo "
            <input type='radio' name='howPurchased' value='online' checked='checked'>Online</input></br>
            <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
            <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
            <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        } else if ($_POST['howPurchased'] == 'byPhone') {
            echo "
            <input type='radio' name='howPurchased' value='online'>Online</input></br>
            <input type='radio' name='howPurchased' value='byPhone' checked='checked'>By phone</input></br>
            <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
            <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        } else if ($_POST['howPurchased'] == 'mobileApp') {
            echo "
            <input type='radio' name='howPurchased' value='online'>Online</input></br>
            <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
            <input type='radio' name='howPurchased' value='mobileApp' checked='checked'>Mobile app</input></br>
            <input type='radio' name='howPurchased' value='inStore'>In store</input></br>";
        } else if ($_POST['howPurchased'] == 'inStore') {
            echo "
            <input type='radio' name='howPurchased' value='online'>Online</input></br>
            <input type='radio' name='howPurchased' value='byPhone'>By phone</input></br>
            <input type='radio' name='howPurchased' value='mobileApp'>Mobile app</input></br>
            <input type='radio' name='howPurchased' value='inStore' checked='checked'>In store</input></br>";
        }
    }
}


function checkPurchases() {
    if (!isset($_SESSION['purchases']) && !isset($_POST['purchases'])) {
            echo "
            <input type='checkbox' name='purchases[]' value='homePhone'>Home Phone</input></br>
            <input type='checkbox' name='purchases[]' value='mobilePhone'>Mobile Phone</input></br>
            <input type='checkbox' name='purchases[]' value='smartTV'>Smart TV</input></br>
            <input type='checkbox' name='purchases[]' value='laptop'>Laptop</input></br>
            <input type='checkbox' name='purchases[]' value='desktop'>Desktop Computer</input></br>
            <input type='checkbox' name='purchases[]' value='tablet'>Tablet</input></br>
            <input type='checkbox' name='purchases[]' value='homeTheater'>Home Theater</input></br>";
    }

    else  if (isset($_SESSION['purchases'])) {
        if (in_array('homePhone', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='homePhone' checked='checked'>Home Phone</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='homePhone'>Home Phone</input></br>";
        }
        if (in_array('mobilePhone', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='mobilePhone' checked='checked'>Mobile Phone</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='mobilePhone'>Mobile Phone</input></br>";
        }
        if (in_array('smartTV', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='smartTV' checked='checked'>Smart TV</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='smartTV'>Smart TV</input></br>";
        }
        if (in_array('laptop', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='laptop' checked='checked'>Laptop</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='laptop'>Laptop</input></br>";
        }
        if (in_array('desktop', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='desktop' checked='checked'>Desktop</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='desktop'>Desktop</input></br>";
        }
        if (in_array('tablet', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='tablet' checked='checked'>Tablet</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='tablet'>Tablet</input></br>";
        }
        if (in_array('homeTheater', $_SESSION['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='homeTheater' checked='checked'>Home Theater</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='homeTheater'>Home Theater</input></br>";
        }
    }
    else if (isset($_POST['purchases'])) {
        if (in_array('homePhone', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='homePhone' checked='checked'>Home Phone</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='homePhone'>Home Phone</input></br>";
        }
        if (in_array('mobilePhone', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='mobilePhone' checked='checked'>Mobile Phone</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='mobilePhone'>Mobile Phone</input></br>";
        }
        if (in_array('smartTV', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='smartTV' checked='checked'>Smart TV</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='smartTV'>Smart TV</input></br>";
        }
        if (in_array('laptop', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='laptop' checked='checked'>Laptop</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='laptop'>Laptop</input></br>";
        }
        if (in_array('desktop', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='desktop' checked='checked'>Desktop</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='desktop'>Desktop</input></br>";
        }
        if (in_array('tablet', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='tablet' checked='checked'>Tablet</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='tablet'>Tablet</input></br>";
        }
        if (in_array('homeTheater', $_POST['purchases'])) {
            echo "<input type='checkbox' name='purchases[]' value='homeTheater' checked='checked'>Home Theater</input></br>";
        }
        else {
            echo "<input type='checkbox' name='purchases[]' value='homeTheater'>Home Theater</input></br>";
        }
    }

}

?>
