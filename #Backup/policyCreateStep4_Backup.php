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
	<td><a href="#">Issued policy process</a></td>
</tr>
<tr>
	<td>Issued Policy No. <?php echo $polQuoNum; ?> successfully<br></td>
</tr>
<tr>
	<td>Policy Created successfully</td>
</tr>
</table>
<a href="policySearch.php"><input type="submit" value="Search"/></a>
<a href="home.php"><input type="submit" value="Home"/></a>
</body>

<?php 
	session_destroy();
?>

</html>