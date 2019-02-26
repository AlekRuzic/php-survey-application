<?php
/* displays the first form in the survey.
   authors: Alek, Lillian, Lyniker, Jane, Wen */

    function form1() { ?>
        <form method="POST" class="formWrap">
                <label for="fullName">Full Name: </label></br>
                <input type="text" id="fullName" name="fullName" value="<?php echo checkFullName();?>"/>
                <!-- if there is an error with the first name, echo it here -->
                <?php if (isset($_POST['form1Errors']) && isset($_POST['form1Errors']['fullNameError'])) {
                    echo $_POST['form1Errors']['fullNameError'];
                } ?>
                </br>
                <label for="age">Your Age: </label>
                </br>
                <input type="text" id="age" name="age" value="<?php echo checkAge();?>"/>
                <!-- if there is an error with the first name, echo it here -->
                <?php if (isset($_POST['form1Errors']) && isset($_POST['form1Errors']['ageError'])) {
                    echo $_POST['form1Errors']['ageError'];
                } ?>
                </br>
                <label for="student">Are you a student?</label> </br>
                <?php checkStudent(); 
                if (isset($_POST['form1Errors']) && isset($_POST['form1Errors']['studentError'])) {
                    echo $_POST['form1Errors']['studentError'];
                } ?>
            <div class="buttonsDiv">
            <input type="submit" name="previousButton" value="Previous" />
            <input type="submit" name="nextButton" value="Next" />
            </div>
	 </form>
<?php }


    function checkStudent() {
        echo "<select name='student'>";
        if (!isset($_SESSION['student']) && !isset($_POST['student'])) {
                echo "<option value='' name='student' selected='selected'></option>
                      <option value='FullTime' name='student'>Yes, Full Time</option>
                      <option value='PartTime' name='student'>Yes, Part Time</option>
                      <option value='No' name='student'>No</option>
                      </select>";
        }

        else if (isset($_POST['student'])) {
                echo "<option value='' name='student'></option>";

                if ($_POST['student'] == 'FullTime') {
                    echo "<option value='FullTime' name='student' selected='selected'>Yes, Full Time</option>";
                }
                else {
                    echo "<option value='FullTime' name='student'>Yes, Full Time</option>";
                }
                if ($_POST['student'] == 'PartTime') {
                    echo "<option value='PartTime' name='student' selected='selected'>Yes, Part Time</option>";
                }
                else {
                    echo "<option value='PartTime' name='student'>Yes, Part Time</option>";
                }
                if ($_POST['student'] == 'No') {
                    echo "<option value='No' name='student' selected='selected'>No</option>";
                }
                else {
                    echo "<option value='No' name='student'>No</option>";
                }
                echo "</select>";
        }

        else if (isset($_SESSION['student'])) {
            echo "<option value='' name='student'></option>";

            if ($_SESSION['student'] == 'FullTime') {
                echo "<option value='FullTime' name='student' selected='selected'>Yes, Full Time</option>";
            }
            else {
                echo "<option value='FullTime' name='student'>Yes, Full Time</option>";
            }
            if ($_SESSION['student'] == 'PartTime') {
                echo "<option value='PartTime' name='student' selected='selected'>Yes, Part Time</option>";
            }
            else {
                echo "<option value='PartTime' name='student'>Yes, Part Time</option>";
            }
            if ($_SESSION['student'] == 'No') {
                echo "<option value='No' name='student' selected='selected'>No</option>";
            }
            else {
                echo "<option value='No' name='student'>No</option>";
            }
            echo "</select>";
        }
    }

    function checkFullName() {
        if (isset($_SESSION['fullName'])) {
            echo $_SESSION['fullName'];
        }
        else if (isset($_POST['fullName'])) {
            echo $_POST['fullName'];
        }
        else {
            echo "";
        }
    }

    function checkAge() {
        if (isset($_SESSION['age'])) {
            echo $_SESSION['age'];
        }
        else if (isset($_POST['age'])) {
            echo $_POST['age'];
        }
        else {
            echo "";
        }
    }
 ?>
