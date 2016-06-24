<?php include 'config/config.php'; 
	$conn = connOpen();
	// $sql = "SELECT POL_MasPolNum, POL_QuoNum
	// 		FROM Policy p1
	// 		WHERE p1.POL_ID_PK= (SELECT COUNT(*) FROM Policy p2);";
	

	$sql = "SELECT * 
FROM Policy p JOIN PolicyStatus s
ON p.POL_Status_ID_FK=s.POL_Status_ID_PK
ORDER BY p.POL_ID_PK"; 



// SELECT * 
// FROM Policy p JOIN PolicyStatus s
// ON p.`POL_Status_ID_FK`=s.`POL_Status_ID_PK`
// ORDER BY p.`POL_ID_PK`;
		
	$result = $conn->query($sql) or die("Connection failed: " . $conn->connect_error);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $policySearch?></title>
</head>

<body>
Search Criteria
<form action="#">
<table>
<tr>
	<td><a href="#">entry redbook info.</a></td>
</tr>
<tr>
	<td>
		<input type="Reset">
		<input type="submit" value="search"/>
	</td>
</tr>
</table>

Policy Information
<table border="1">
<tr>
	<th>No.</th>
	<th>Policy No.</th>
	<th>Status</th>
	<th>Menu2</th>
</tr>
<?php 
		if ($result->num_rows > 0) {
	    // output data of each row
		$no=1;
	    while($row = $result->fetch_assoc()) {
	        ?>
	    <tr>
	   
	    	<td><?php echo $no++; ?></td>
			<td><a href="#"><?php echo $row["POL_QuoNum"] ?></a></td>
			<td><?php echo $row["POL_StatusName_EN"] ?></td>
			<td>Menu</td>
		</tr>
	    	<?php	
	    	}
		} else {
			?>
		    
		    <tr>
	   
	    	<td><?php echo "0 results"; ?></td>
			<td><a href="#">Policy No.</a></td>
			<td>Menu1</td>
			<td>Menu2</td>
		</tr>
		<?php
		}
	?>


</body>
<footer>
<?php 
	connClose($conn);
	//redirect("policySearchAll.php")
?>
</footer>
</html>