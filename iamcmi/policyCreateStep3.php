<!-- MAIN STYLE SECTION-->
<link href="../assets/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
<link href="../assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link href="../assets/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
<link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="../assets/css/about-achivements.css" rel="stylesheet" />
<link id="mainStyle" href="../assets/css/style.css" rel="stylesheet" />
<!-- END MAIN STYLE SECTION-->

<!-- HEADER SECTION-->
<?php 
// @BEGIN
// @DEKDEEDEV_IAMCMI
// @Falom
// @2016-06-19 SUN 02:08 PM 
include 'config/config.php'; 
include 'header.php'; 
// @Falom END 2016-06-19 SUN 02:08 PM 
?>
<!-- END HEADER SECTION-->
<title><?php echo $policyCreate ?></title>
</head>
<body>
	<form action="#.php" method="post">
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1>&nbsp;พ. ร. บ.</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>บันทึกข้อมูลกรรมธรรม์เรียบร้อย</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขกรมธรรม์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="chas"
						placeholder="Enter Chassis Number" value='<?php echo $_SESSION["polQuoNum"]; ?>'>
				</div>
			</div><br>
				<div class="row">
				<div class="col-md-12" align="center">
					<a href="#.php"><button type="button" class="btn btn-primary btn-md">Print</button></a>
					<a href="#.php"><button type="button" class="btn btn-primary btn-md">Download</button></a>
					<a href="home.php"><button type="button" class="btn btn-primary btn-md">Home</button></a>
				</div>
			</div>
		</div>
	</form>
</body>	
<footer>

<?php 
	unset($_SESSION["polQuoNum"]);
?>

</footer>
</html>