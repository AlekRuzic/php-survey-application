<?php
/* submits all data from forms into lamp1_survey database
   authors: Alek, Lillian, Lyniker, Jane, Wen */
function submitForm() {
    $db_conn = new mysqli('localhost', 'lamp1_survey', '!survey!', 'lamp1_survey');
    if ($db_conn->connect_errno) {
    die ("Could not connect to database server".$db_host."\n Error: ".$db_conn->connect_errno ."\n Report: ".$db_conn->connect_error."\n");
    }

	if (isset($_SESSION['fullName'])) {
		$full_name = $db_conn->real_escape_string($_SESSION['fullName']);
    }
	if (isset($_SESSION['age'])) {
		$age = $db_conn->real_escape_string($_SESSION['age']);
    }
	if (isset($_SESSION['student'])) {
        if ($_SESSION['student'] == "FullTime") {
            $student = "F";
        }
        else if ($_SESSION['student'] == "PartTime") {
            $student = "P";
        }
        if ($_SESSION['student'] == "No") {
            $student = "N";
        }
    }

	$qry = "INSERT INTO participants (part_fullname, part_age, part_student)
		VALUES (\"$full_name\",$age,\"$student\");";
    $db_conn->query($qry);


    $qry = "SELECT MAX(part_id) FROM participants;";
    $participant_id = current($db_conn->query($qry)->fetch_assoc());

    $how_purchased = $_SESSION['howPurchased'];

    foreach ($_SESSION['purchases'] as $value) {
        $satisfaction = $_SESSION["satisfaction_$value"];
        $recommend = $_SESSION["recommend_$value"];

        $qry = "INSERT INTO responses (resp_part_id, resp_product, resp_how_purchased, resp_satisfied, resp_recommend)
                    VALUES ($participant_id, \"$value\", \"$how_purchased\", $satisfaction, \"$recommend\");";
        $db_conn->query($qry);
        }
    $db_conn->close();
}
?>