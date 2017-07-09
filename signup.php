<?php

	if (array_key_exists("submit", $_POST)) {
		$error = "";

		if (!$_POST['email']) {

			$error .= "An email address is required";
		} 

		if (!$_POST['password']) {
			$error .= "A password is required";
		}

		if ($error != "") {
			$error = "<p>There were error(s) in your form:</p>".$error;
		} else {


		}

	}
?>

 <?php include("firebase.php"); ?>

<?php include("header.php"); ?>


