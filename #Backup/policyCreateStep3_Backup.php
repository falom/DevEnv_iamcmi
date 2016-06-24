<?php 
	require_once('config/config.php'); 
	session_start();
	$polQuoNum=$_SESSION["polQuoNo"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $homeTitle?></title>
</head>

<body>
Step
<form action="policySaveStep3.php" method="POST">
<table>
<tr>
	<td><a href="#">Entry policy information process</a></td>
</tr>
<tr>
	<td><a href="#">Summary plan</a></td>
</tr>
<tr>
	<td><a href="#">Payment process</a></td>
</tr>
<tr>
	<td>Quotation No: <?php echo $polQuoNum; ?><br></td>
</tr>
<tr>
	<td><a href="#">Issued policy process</a></td>
</tr>
<tr>
	<td>
		<input type="Reset"/>
		<input type="submit" value="Submit"/>
	</td>
</tr>
</table>
</form>
<form action="policyCreateStep2.php" method="POST">
	<input type="submit" value="Back"/>
</form>
</body>

</html>