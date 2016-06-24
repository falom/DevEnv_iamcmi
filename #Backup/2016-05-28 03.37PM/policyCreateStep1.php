<?php 
	require_once('config/config.php'); 
?>

<?php $conn = connOpen();

	$sql = "SELECT POL_MasPolNum, POL_QuoNum
			FROM Policy p1
			WHERE p1.POL_ID_PK= (SELECT COUNT(*) FROM Policy p2);";


	$result = $conn->query($sql) or die("Connection failed: " . $conn->connect_error);
	$row = $result->fetch_assoc();
	echo "Last Policy No.: ".$policyNo = $row["POL_QuoNum"]."<br>";
	echo "New Policy No.: ".newPolicyNo($policyNo);
	$size = $result->num_rows;
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $homeTitle?></title>
</head>

<body>
<form action="#">
Entry Policy Information

<table>
<tr>
	<td>Policy Information</td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td>Vehical Information</td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td>Customer Information</td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td>
		<input type="Reset"/>
		<input type="submit" value="submit"/>
	</td>
</tr>
</table>
</form>

</body>

<footer>
<?php connClose($conn);?>
</footer>
</html>