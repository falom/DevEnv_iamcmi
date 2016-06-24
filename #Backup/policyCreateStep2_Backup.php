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
<form action="policyCreateStep3.php" method="POST">
<table>
<tr>
	<td><a href="#">Entry policy information process</a></td>
</tr>
<tr>
	<td><a href="#">Summary plan</a></td>
</tr>
<tr>
	<td>Quotation No: <?php echo $polQuoNum; ?><br></td>
	<td>Comments: <?php if(!empty($_POST['comments'])){ echo $_POST['comments']; }?><br></td>
</tr>
<tr>
	<td><a href="#">Payment process</a></td>
</tr>
<tr>
	<td><a href="#">Issued policy process</a></td>
</tr>
<tr>
	<td>
		
		<input type="Reset"/>

		<input type="hidden" name="nextPolQuoNo" id="nextPolQuoNo" value="<?php if(!empty($_POST['polQuoNo'])){ echo $_POST['polQuoNo']; }?>"/>
		<input type="submit" value="Submit"/>
	</td>
</tr>
</table>
</form>
<form action="policyCreateStep1.php" method="POST">
	<input type="hidden" name="backPolQuoNo" id="backPolQuoNo" value="<?php if(!empty($_POST['polQuoNo'])){ echo $_POST['polQuoNo']; }?>"/>
	<input type="submit" value="Back"/>
</form>
</body>

</html>