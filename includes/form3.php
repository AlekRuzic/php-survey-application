<?php
/* displays 3rd form in the survey
   authors: Alek, Lillian, Lyniker, Jane, Wen */

function form3() { ?>
	<form method="POST" class="formWrap">
	<?php
	foreach ($_SESSION['purchases'] as $value) { 
		switch ($value) {
			case "homePhone":
				echo 'Home Phone';
				break;
			case "mobilePhone":
				echo 'Mobile Phone';
				break;
			case "smartTV":
				echo 'Smart TV';
				break;
			case "laptop":
				echo 'Laptop';
				break;
			case "desktop":
				echo 'Desktop';
				break;
			case "tablet":
				echo 'Tablet';
				break;
			case "homeTheater":
				echo 'Home Theater';
				break;
		}

	echo '<br>'; ?>

		<label for="satisfaction">How happy are you with this device on a scale from 1 (Not satisfied) to 5 (Very satisfied)?</label> </br>
		<?php if(isset($_POST['form3Errors']["satisfaction_$value"])) {
			echo $_POST['form3Errors']["satisfaction_$value"];
		}
		?>
		</br>

		<input type="radio" name="satisfaction_<?php echo $value ?>" value="1">1</br>
		<input type="radio" name="satisfaction_<?php echo $value ?>" value="2">2</br>
		<input type="radio" name="satisfaction_<?php echo $value ?>" value="3">3</br>
		<input type="radio" name="satisfaction_<?php echo $value ?>" value="4">4</br>
		<input type="radio" name="satisfaction_<?php echo $value ?>" value="5">5</br>
		</br>
		<label for="recommend_<?php echo $value ?>" >Would you recommend the purchase of this device to a friend?</br>
		<?php if(isset($_POST['form3Errors']["recommend_$value"])) {
			echo $_POST['form3Errors']["recommend_$value"];
		}
		?>
		</br>
		<select name="recommend_<?php echo $value ?>" >
		<option value=""></option>
		<option value="Yes">Yes</option>
		<option value="Maybe">Maybe</option>
		<option value="No">No</option>
		</select>
		<br><br>
	<?php } ?>
			<div class="buttonsDiv">
            <button type="submit" name="previousButton">Previous</button>
            <button type="submit" name="nextButton">Next</button>
			</div>
	</form>
	<?php } ?>
