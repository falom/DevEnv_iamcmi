<?php 
	require_once('config/config.php'); 
	session_start();
	$_SESSION["polQuoNo"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<script src="config/bootstrap/js/bootstrap.min.js"></script>
<script src="config/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<link href="config/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">

<title><?php echo $policyCreate ?></title>
<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
</head>
User: <?php echo $_SESSION["usrName"]; ?> <a href="">Logout</a><br>
Current Date: <?php echo date("d-m-Y h:i:sa"); ?>
<body>
	<form action="policyCreateStep3.php" method="post">
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1>&nbsp;พ. ร. บ.</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>รายละเอียดความคุ้มครอง</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขกรมธรรม์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="chas"
						placeholder="Enter Chassis Number" value='<?php echo $_SESSION["polQuoNo"]; ?>'>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" align="left">วันที่เริ่มคุ้มครอง :</div>
				<div class="col-md-3">
					<div class="input-group date" id="datepicker">
						<input type="text" class="form-control" id="sEffDate"
							placeholder="วันที่เริ่มคุ้มครอง" value=''>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
				<div class="col-md-3" align="right">วันสิ้นสุดความคุ้มครอง:</div>
				<div class="col-md-3">
					<div class="input-group date" data-provide="datepicker">
						<input type="text" class="form-control" id="sEffDate"
							placeholder="วันสิ้นสุดความคุ้มครอง" value=''>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div><br>
				<div class="row">
				<div class="col-md-12" align="center">
					<a href="policyCreateStep1.php"><button type="button" class="btn btn-primary btn-md">Back</button></a>
					<input type="Submit" class="btn btn-primary btn-md" Value="Next"/>
				</div>
			</div>
		</div>
	</form>
</body>	
<footer>
</footer>
</html>