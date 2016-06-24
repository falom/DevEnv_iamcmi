<?php 
	require_once('config/config.php'); 
	session_start();
?>

<?php $conn = connOpen();

	$sql = "SELECT POL_ID_PK, POL_QuoNum 
			FROM policy
			ORDER BY POL_ID_PK DESC
			LIMIT 1;";


	$result = $conn->query($sql) or die("Connection failed: " . $conn->connect_error);
	$size = $result->num_rows;
	
	$lastPolNo=0;
	if( $size > 0 ){
		$row = $result->fetch_assoc();
		$lastPolNo = $row["POL_QuoNum"];
	}
	
	$polQuoNo = getNewPolicyNo($lastPolNo);
	$_SESSION["polQuoNo"] = $polQuoNo;
?>
	
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $homeTitle?></title>
</head>

<body>
<!-- <form action="policyCreateStep2.php" method="POST"> -->
<form action="policySaveStep1.php" method="POST">

<table>
<tr>
	<td><a href="#">Entry policy information process</a></td>
</tr>	
<tr>
	<th>Policy Information</th>
</tr>
<tr>
	<td>Quotation No.: <br>
		Last Policy No.: <?php echo $lastPolNo; ?><br>
		New Policy No.: <input type="text" name="polQuoNo" value=<?php echo $_SESSION["polQuoNo"] ?> />;<br>
		Comments: <input type="text" name="comments" id="comments"><br>
	</td>
</tr>
<tr>
	<th>Vehical Information</th>
</tr>
<tr>
	<td>
		Vehical Type: <input type="text" name="vehType"> Vehical Model: <input type="text" name="vehModel"><br>
	</td>
</tr>
<tr>
	<th>Customer Information</th>
</tr>
<tr>
	<td>
		Name: <input type="text" name="cusFirstname"> Lastname: <input type="text" name="cusLastname"><br>
	</td>
</tr>
<tr>
	<td>
		<input type="Reset"/>
		<input type="submit" value="submit"/>
	</td>
</tr>
<tr>
	<td><a href="#">Summary plan</a></td>
</tr>
<tr>
	<td><a href="#">Payment process</a></td>
</tr>
<tr>
	<td><a href="#">Issued policy process</a></td>
</tr>
</table>
</form>

</body>

<footer>
<?php connClose($conn);?>
</footer>
</html>