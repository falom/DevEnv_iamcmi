<?php 
include 'config/config.php'; 
include 'header.php'; 
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
<body>
	<form action="policySaveStep2.php" method="post">
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1>&nbsp;พ. ร. บ.</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>ขั้นตอนการจ่ายเงิน</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขกรมธรรม์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="chas"
						placeholder="Enter Chassis Number" value=''>
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