<?php 
	require_once('config/config.php'); 
	session_start();

	echo $polQuoNum=$_SESSION["polQuoNo"];
?>

<?php 
	$conn = connOpen();
	// $sql = "SELECT POL_MasPolNum, POL_QuoNum
	// 		FROM Policy p1
	// 		WHERE p1.POL_ID_PK= (SELECT COUNT(*) FROM Policy p2);";
	

	$sql = "INSERT INTO Policy (POL_QuoNum)
			VALUES ('$polQuoNum')"; 
		
	if ($conn->query($sql) === TRUE) {
	   echo "New record created successfully";
	} else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	}
	connClose($conn);
	redirect("policyCreateStep2.php")
?>