<?php 
function summary() { ?>
    <div id="summaryTable">
    <form method="POST">
    <table id="participant">
        <tr><th>Participant</th><tr>
        <tr><td>Full Name</td><td><?php echo $_SESSION['fullName']; ?></td></tr>
        <tr><td>Age</td><td><?php echo $_SESSION['age']; ?></td></tr>
        <tr><td>Are you a student?</td><td><?php echo $_SESSION['student']; ?></td></tr>
    </table>

    <table id="responses">
        <tr><th id="tableHeader">Responses</th></tr>

        <?php foreach ($_SESSION['purchases'] as $value) {
                switch ($value) {
                    case "homePhone":
                        addToTable($value);
                        break;
                    case "mobilePhone":
                        addToTable($value);
                        break;
                    case "smartTV":
                        addToTable($value);
                        break;
                    case "laptop":
                        addToTable($value);
                        break;
                    case "desktop":
                        addToTable($value);
                        break;
                    case "tablet":
                        addToTable($value);
                        break;
                    case "homeTheater":
                        addToTable($value);
                        break;
          }
        } ?>
    </table>
			<div class="buttonsDiv">
            <button type="submit" name="previousButton">Previous</button>
            <button type="submit" name="nextButton">Next</button>
			</div>
    </form>
    </div>
<?php }

function addToTable($product) {
    echo "<tr><td>Product:</td><td>$product</td></tr>";

    echo "<tr><td>Satisfaction Rating:</td>";
    echo "<td>".$_SESSION["satisfaction_$product"]."</td></tr>";

    echo "<tr><td>Would you recommend the purchase of this device to a friend?</td>";
    echo "<td>".$_SESSION["recommend_$product"]."</td></tr>";
    echo "<tr><td><br></td></tr>";
} ?>