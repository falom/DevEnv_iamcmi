<?php 
	session_start();
	if (!isset($_SESSION["usrName"])) {
		session_destroy();
		redirect("Login.php");
	}
	else{	
		echo "Username: ".$_SESSION["usrName"]." <a href=Logout.php>Logout</a><br>";
		echo "Role: ".$_SESSION["usrRole"]."<br>";
		echo "Update Datetime: ".date("d-m-Y h:i:sa");
		echo "<br><br><a href=home.php>Home</a><br>";
		echo "<a href=policyCreateStep1.php>New Quote</a><br>";
		echo "<a href=policySearchAll.php>Search</a><br>";
		echo "<a href=#.php>Contact Us</a><br>";
	}
?>