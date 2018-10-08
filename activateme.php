<?php
include('database/db_connection.php');
	if(!empty($_GET["UserID"])) {
	$query = "UPDATE users set ActivationStatus = '1' WHERE UserID ='" . $_GET["id"]. "'";
	$result = $db->query($query);
		if(!empty($result)) {
			echo "Your account is activated.";
		} else {
	               echo "Problem in account activation.";
        }
        {
            echo"<script>window.open('welcome.php','_self')</script>";
        }
	}
?>