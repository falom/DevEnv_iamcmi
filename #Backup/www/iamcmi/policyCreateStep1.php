<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<script src="config/bootstrap/js/bootstrap.min.js"></script>
<script src="config/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<link href="config/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="../css/iamStyle.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../js/jquery-1.12.4.js"></script>
<script src="../js/jquery-1.12.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery-ui-1.12.0-rc.2/jquery-ui.js"></script>
<link rel="stylesheet" href="../js/jquery-ui-themes-1.12.0-rc.2/themes/smoothness/jquery-ui.css" />

<script type="text/javascript" src="../bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="../bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">


<!-- MAIN STYLE SECTION-->
<link href="../assets/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
<link href="../assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link href="../assets/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
<link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="../assets/css/about-achivements.css" rel="stylesheet" />
<link id="mainStyle" href="../assets/css/style.css" rel="stylesheet" />
<!-- END MAIN STYLE SECTION-->

<title><?php echo $policyCreate ?></title>

 <script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker();
        $('#datetimepicker5').datetimepicker();
    });
</script>

</head>

<body>
	<form action="policySaveStep1.php" method="post">
		  <!-- HEADER SECTION-->
    <div class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
        	<div class="row">        		 
        	</div>
        	<div>
        		 <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="fa fa-bars mobile-bars" style=""></span>
	                </button>                            
	               	<div class="navbar-brand" href="index.html" >
                    	<img src="../img/logo2.png" /> <!-- logo here-->
            		</div>            		
	            </div>
	            <div class="navbar-collapse collapse" data-scrollreveal="enter from the right 50px">
	            	<div align="right" class="logout">
	                	User: <?php echo $_SESSION["usrName"]; ?> <a href="">Logout</a>
						Current Date: <?php echo date("d-m-Y h:i:sa"); ?>
                	</div> 
	                <ul class="nav navbar-nav">
	                    <li class=""><a href="#Homepage">Home</a></li><!-- menu links-->
	                    <li><a href="#section-about">Create</a></li>  
	                    <li><a href="#section-works">Query</a></li>
	                    <li><a href="#section-services">Print</a></li>
	                </ul>
	            </div>
        	</div>	           
        </div>
    </div> <br><br><br><br>
     <!-- END HEADER SECTION-->
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1 style="display: -webkit-inline-box;">&nbsp;พ. ร. บ.</h1>
			</div>
			<div class="row titleInsured">
				<div class="col-md-12">
					<div>
						<h4 style="display: -webkit-inline-box;padding-left: 5px; color:white;"><b>ข้อมูลกรรมธรรม์</b></h4>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" align="left">เลขกรมธรรม์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="" id="polQuoNum" name="polQuoNum" readonly value='<?php echo $_SESSION["polQuoNum"]; ?>' >
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" align="left">วันที่เริ่มคุ้มครอง :</div>
				<div class="col-md-3">
					<div class="date" id="datetimepicker">						
						<div id="datetimepicker4" class="input-group date"> 
			               <input type="text" class="form-control" data-format="dd-MM-yyyy HH:mm:ss" placeholder="วันที่เริ่มคุ้มครอง" 
							id="polEffDate" name="polEffDate" value='<?php echo $polEffDate; ?>'>
			                <span class="add-on"> 
			                    <i class="glyphicon glyphicon-calendar cld"></i> 
			                </span> 
            			</div> 
					</div>
				</div>

				<div class="col-md-3" align="right">วันสิ้นสุดความคุ้มครอง:</div>
				<div class="col-md-3">
					<div class="date" id="datetimepicker">						
						<div id="datetimepicker5" class="input-group date"> 
				             <input type="text" class="form-control" data-format="dd-MM-yyyy HH:mm:ss"  placeholder="วันสิ้นสุดความคุ้มครอง" 
								id="polExpDate" name="polExpDate" value='<?php echo $polExpDate ?>'>
							 <div class="add-on"> 
				                <i class="glyphicon glyphicon-calendar cld"></i> 
				             </div> 
				        </div>
					</div>
				</div>
			</div><br>
			<div class="row titleInsured">
				<div class="col-md-12">
					<div>
						<h4 style="display: -webkit-inline-box;padding-left: 5px; color:white;"><b>ข้อมูลรถ</b></h4>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ยี่ห้อ :</div>
				<div class="col-md-2">
					<select name="redMake" id="redMake" class="form-control">
						<option>กรุณาเลือก</option>
						<option name="redMake" id="redMake" value="Honda">Honda</option>
						<option>------------------</option>
						<?php 
						if ($redMakeResult->num_rows > 0) {
							while($redMakeResultRow = $redMakeResult->fetch_assoc()){
							?>
							<option name="redMake" id="redMake" value=<?php echo $redMakeResultRow["RED_Make"];?>><?php echo $redMakeResultRow["RED_Make"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
				<div class="col-md-2" align="right">รุ่น :</div>
				<div class="col-md-2">
					<select name="redModel" id="redModel" class="form-control">
						<option>กรุณาเลือก</option>
						<option name="redModel" id="redModel" value="Accord">Accord</option>
						<option>------------------</option>
						<?php 
						if ($redModelResult->num_rows > 0) {
							while($redModelResultRow = $redModelResult->fetch_assoc()){
							?>
							<option name="redModel" id="redModel" value=<?php echo $redModelResultRow["RED_Model"];?>><?php echo $redModelResultRow["RED_Model"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
				<div class="col-md-2" align="right">ปี :</div>
				<div class="col-md-2">
					<select name="redYear" id="redYear" class="form-control">
						<option>กรุณาเลือก</option>
						<option name="redYear" id="redYear" value="2009">2009</option>
						<option>------------------</option>
						<?php 
						if ($redYearResult->num_rows > 0) {
							while($redYearResultRow = $redYearResult->fetch_assoc()){
							?>
							<option name="redYear" id="redYear" value=<?php echo $redYearResultRow["RED_Year"];?>><?php echo $redYearResultRow["RED_Year"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">รุ่นย่อย :</div>
				<div class="col-md-2">
					<select name="redDesc" id="redDesc" class="form-control">
						<option>กรุณาเลือก</option>
						<option name="redDesc" id="redDesc" value="Sedan 4dr 2.0 2009 MY08 E i-VTEC SA 5sp FWD i -">Sedan 4dr 2.0 2009 MY08 E i-VTEC SA 5sp FWD i -</option>
						<option>------------------</option>
						<?php 
						if ($redDescResult->num_rows > 0) {
							while($redDescResultRow = $redDescResult->fetch_assoc()){
							?>
							<option name="redDesc" id="redDesc" value=<?php echo $redDescResultRow["RED_Desc"];?>><?php echo $redDescResultRow["RED_Desc"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
				
				<div class="col-md-2" align="right">รหัสรถ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="redKeyFK" placeholder="รหัสรถ">
				</div>
				<div class="col-md-2" align="right">รหัสตัวแทน :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="AgreeCode"
						placeholder="รหัสตัวแทน">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">การขับเคลื่อน :</div>
				<div class="col-md-2">
				<select name="tarPower" id="tarPower" class="form-control">
						<option>กรุณาเลือก</option>
						<?php 
						if ($tarPowerResult->num_rows > 0) {
							while($tarPowerResultRow = $tarPowerResult->fetch_assoc()){
							?>
							<option name="tarPower" id="tarPower" value=<?php echo $tarPowerResultRow["TAR_PowerName_TH"];?>><?php echo $tarPowerResultRow["TAR_PowerName_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
				</select>		
				</div>

				<div class="col-md-2" align="right">ประเภท :</div>
				<div class="col-md-2">
				<select name="tarBody" id="tarBody" class="form-control">
						<option>กรุณาเลือก</option>
						<?php 
						if ($tarBodyResult->num_rows > 0) {
							while($tarBodyResultRow = $tarBodyResult->fetch_assoc()){
							?>
							<option name="tarBody" id="tarBody" value=<?php echo $tarBodyResultRow["TAR_BodyName_TH"];?>><?php echo $tarBodyResultRow["TAR_BodyName_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
				</select>	
				</div>
				
				<div class="col-md-2" align="right">ประเภทย่อย :</div>
				<div class="col-md-2">
				<select name="tarBody" id="tarBody" class="form-control">
						<option>กรุณาเลือก</option>
						<?php 
						if ($tarSubBodyResult->num_rows > 0) {
							while($tarSubBodyResultRow = $tarSubBodyResult->fetch_assoc()){
							?>
							<option name="tarBody" id="tarBody" value=<?php echo $tarSubBodyResultRow["TAR_SubBodyName_TH"];?>><?php echo $tarSubBodyResultRow["TAR_SubBodyName_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
				</select>	
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">การใช้งาน :</div>
				<div class="col-md-2">
				<select name="tarUsage" id="tarUsage" class="form-control">
						<option>กรุณาเลือก</option>
						<?php 
						if ($tarUsageResult->num_rows > 0) {
							while($tarUsageResultRow = $tarUsageResult->fetch_assoc()){
							?>
							<option name="tarUsage" id="tarUsage" value=<?php echo $tarUsageResultRow["TAR_UsageName_TH"];?>><?php echo $tarUsageResultRow["TAR_UsageName_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
				</select>	
				</div>		
				<div class="col-md-2" align="right">รหัสรถ :</div>
				<div class="col-md-2">
				<input type="text" class="form-control" id="vehTarVehCodeFK" name="vehTarVehCodeFK" value=""
						placeholder="รหัสรถ">	
				</div>
			</div>	
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ความจุ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehCapacity" name="vehCapacity" value='<?php echo $vehCapacity ?>'
						placeholder="ความจุ">
				</div>
				<div class="col-md-2" align="right">น้ำหนัก :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehWeight" name="vehWeight" value='<?php echo $vehWeight ?>'
						placeholder="น้ำหนัก">
				</div>
				<div class="col-md-2" align="right">จำนวนที่นั่ง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehSeat" name="vehSeat" value='<?php echo $vehSeat ?>'
						placeholder="จำนวนที่นั่ง">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขตัวถัง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehChassisNum" name="vehChassisNum" value='<?php echo $vehChassisNum ?>'
						placeholder="เลขตัวถัง">
				</div>
				<div class="col-md-2" align="right">ทะเบียนรถ:</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehLicenseNum" name="vehLicenseNum" value='<?php echo $vehLicenseNum ?>'
						placeholder="ทะเบียนรถ">
				</div>
				
			</div>
			<br>
			<div class="row titleInsured">
				<div class="col-md-12" align="left">
					<div>
						<h4 style="display: -webkit-inline-box;padding-left: 5px; color:white;"><b>เบี้ยประกัน</b></h4>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เบี้ยสุทธิ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="NetPm" name="NetPm" value='<?php echo $perFName ?>'
						placeholder="เบี้ยสุทธิ" >
				</div>
				<div class="col-md-2" align="right">ภาษี :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="tax" name="tax" value='<?php echo $perLName ?>'
						placeholder="ภาษี" >
				</div>
				<div class="col-md-2" align="right">อากร :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="stamp" name="stamp" value='<?php echo $perDOB ?>'
						placeholder="อากร" >
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เบี้ยรวม:</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="totalpm" name="totalpm" value='<?php echo $perFName ?>'
						placeholder="ชื่อ" >
				</div>				
			</div>
			<br>
			<div class="row titleInsured">
				<div class="col-md-6" align="left">
					<div>
						<h4 style="display: -webkit-inline-box;padding-left: 5px; color:white;"><b>ข้อมูลผู้ถือกรมธรรม์</b></h4>
					</div>
				</div>
				<div class="col-md-6" align="right">
					<div style="height: 30px;top: 8px; position: relative;">
						<input type="checkbox" name="" value="">&nbsp;&nbsp; <span class="txtIs">Insured same as policyholder</span>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">คำนำหน้าชื่อ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="prefixName" name="prefixName" value='<?php echo $perFName ?>'
						placeholder="คำนำหน้าชื่อ" >
				</div>
				<div class="col-md-2" align="right">ชื่อ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perFName" name="perFName" value='<?php echo $perFName ?>'
						placeholder="ชื่อ" >
				</div>
				<div class="col-md-2" align="right">นามสกุล :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perLName" name="perLName" value='<?php echo $perLName ?>'
						placeholder="นามสกุล" >
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">วันเกิด :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perDOB" name="perDOB" value='<?php echo $perDOB ?>'
						placeholder="วันเกิด" >
				</div>
				<div class="col-md-2" align="right">ประเภทบัตร :</div>
				<div class="col-md-2">
					<select name="perCardType" id="perCardType" class="form-control">				
					<option>กรุณาเลือก</option>
						<?php 
						if ($perCardTypeResult->num_rows > 0) {
							while($perCardTypeRow = $perCardTypeResult->fetch_assoc()){
							?>
							<option name="perCardType" id="perCardType" value=<?php echo $perCardTypeRow["PER_CardType_ID_PK"];?>><?php echo $perCardTypeRow["PER_CardType_Name_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
				<div class="col-md-2" align="right">เลขที่บัตร :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perCardNo" name="perCardNo" value='<?php echo $perCardNo ?>'
						placeholder="เลขที่บัตร" >
				</div>
			</div>
			<br>
			<div class="row">				
				<div class="col-md-2" align="สำดะ">วันหมดอายุ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perExpDate" name="perExpDate" value='<?php echo $perExpDate ?>'
						placeholder="วันหมดอายุ">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">บ้านเลขที่1 :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="addrLine1" name="addrLine1" value='<?php echo $addrLine1 ?>'
						placeholder="บ้านเลขที่1">
				</div>
				<div class="col-md-2" align="right">บ้านเลขที่2 :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="addrLine2" name="addrLine1" value='<?php echo $addrLine1 ?>'
						placeholder="บ้านเลขที่2">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">จังหวัด :</div>
				<div class="col-md-2">
					<select class="form-control" id="addrProv" name="addrProv">
						<option>กรุณาเลือก</option>
						<option id="addrProv" name="addrProv" value="1">กรุงเทพมหานคร</option>
						<option>------------------</option>
						<?php 
						if ($provResult->num_rows > 0) {
							while($provRow = $provResult->fetch_assoc()){?>
							<option id="addrProv" name="addrProv" value=<?php echo $provRow["PROVINCE_ID"];?> ><?php echo $provRow["PROVINCE_NAME"];?></option>
						<?php
							}
						}
						else{?>		
						<option value="">Test</option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="col-md-2" align="right">แขวง/อำเภอ :</div>
				<div class="col-md-2">
					<select class="form-control" id="addrDist" name="addrDist">
						<option>กรุณาเลือก</option>
						<option id="addrDist" name="addrDist" value="1">เขตพระนคร</option>
						<option>------------------</option>
						<?php 
						if ($addrDistResult->num_rows > 0) {
							while($addrDistResultRow = $addrDistResult->fetch_assoc()){?>
							<option id="addrDist" name="addrDist" value=<?php echo $addrDistResultRow["AMPHUR_NAME"];?> ><?php echo $addrDistResultRow["AMPHUR_NAME"];?></option>
						<?php
							}
						}
						else{?>		
						<option value="">Test</option>
						<?php
						}
						?>
					</select>	
				</div>
				<div class="col-md-2" align="right">เขต/ตำบล :</div>
				<div class="col-md-2">
					<select class="form-control" id="addrSubDist" name="addrSubDist">
						<option>กรุณาเลือก</option>
						<option id="addrSubDist" name="addrSubDist" value="9">ชนะสงคราม</option>
						<option>------------------</option>
						<?php 
						if ($addrDistResult->num_rows > 0) {
							while($addrSubDistResultRow = $addrSubDistResult->fetch_assoc()){?>
							<option id="addrSubDist" name="addrSubDist" value=<?php echo $addrSubDistResultRow["DISTRICT_NAME"];?> ><?php echo $addrSubDistResultRow["DISTRICT_NAME"];?></option>
						<?php
							}
						}
						else{?>		
						<option value="">Test</option>
						<?php
						}
						?>
					</select>	
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">รหัสไปรษณีย์ :</div>
				<div class="col-md-2">
					<select class="form-control" id="addrZipCode" name="addrZipCode">
						<option>กรุณาเลือก</option>
						<option id="addrZipCode" name="addrZipCode" value="10200">10200</option>
						<option>------------------</option>
						<?php 
						if ($addrZipCodeResult->num_rows > 0) {
							while($addrZipCodeResultRow = $addrZipCodeResult->fetch_assoc()){?>
							<option id="addrSubDist" name="addrSubDist" value=<?php echo $addrZipCodeResultRow["zipcode"];?> ><?php echo $addrZipCodeResultRow["zipcode"];?></option>
						<?php
							}
						}
						else{?>		
						<option value="">Test</option>
						<?php
						}
						?>
					</select>		
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">อีเมล์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="อีเมล์" id="addrEmail"  name="addrEmail" value='<?php echo $addrEmail ?>'>
				</div>
				<div class="col-md-2" align="right">ประเภทเบอร์ติดต่อ:</div>
				<div class="col-md-2">
					<select name="addrContType" id="addrContType" class="form-control">
						<option>กรุณาเลือก</option>
						<?php 
						if ($addrContTypeResult->num_rows > 0) {
							while($addrContTypeRow = $addrContTypeResult->fetch_assoc()){
							?>
							<option name="addrContType" id="addrContType" value=<?php echo $addrContTypeRow["ADDR_ContType_ID_PK"];?>><?php echo $addrContTypeRow["ADDR_ContTypeName_TH"];?></option>
							<?php
							}	
						}
						else{
						?>	
						<option value="">Test</option>
						<?php
						}	
						?>
					</select>
				</div>
				<div class="col-md-2" align="right">เบอร์ติดต่อ:</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="addrContNum"
						placeholder="เบอร์ติดต่อ" name="addrContNum">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" align="center">
					<a href="policySaveStep1.php"></a><button class="btn btn-primary btn-md" name="btn" id="btn" value="save">Save</button></a>
					<input type="Reset" class="btn btn-primary btn-md"/>
					<input type="Submit" class="btn btn-primary btn-md" name="btn" id="btn" value="Submit"/>
				</div>
			</div>
		</div>
	</form>
</body>	
<footer>
<?php 
connClose($conn);
?>
</footer>
</html>