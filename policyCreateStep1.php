<?php 
include 'config/config.php'; 
include 'header.php'; 

$conn 	= connOpen();
// echo $_SESSION["polQuoNum"];
if(!isset($_SESSION["polQuoNum"])){ 
// echo "<br>NEW FROM HOME PAGE<br>";
$sqlID	= "PCS1_001";			
$polResult 	= executeSql($conn,$sqlID);
	if($polResult){
	$polResultSize 	= $polResult->num_rows;
		if( $polResultSize == 1 ){
		$polResultRow 	= $polResult->fetch_assoc();
		$lastPolNo 		= $polResultRow["POL_QuoNum"];
		// echo "<br>LAST EXISTING POLICY NUMBER:".$lastPolNo."<br>";
		}
		else{
		// echo "NEW DB POLICY NUMBER: <br>";
		}
		include 'config/Condition/PCS_CON_001.php';
		$_SESSION["startSessionDateTime"] 	= date("Y-m-d H:i:s");
		$_SESSION["polQuoNum"]				= getNewPolicyNo($lastPolNo);
		$polQuoNum 		= $_SESSION["polQuoNum"];
		$polEffDate 	= date("Y-m-d H:i:s");
		$polExpDate 	= date("Y-m-d 16:30:00", strtotime("+12 Months"));
	}
}
else{	
// echo "<br>EXISTING FROM RELOAD/SAVED/SUBMITED&Back <br>";
$polQuoNum = $_SESSION["polQuoNum"];
$sqlID			= "PCS1_003";				
$quoQueryResult = executeSql($conn,$sqlID);
	if($quoQueryResult){
	$quoQueryResultSize = $quoQueryResult->num_rows;
		if($quoQueryResultSize==0){
		echo "WHEN RELOAD PAGE";
		include 'config/Condition/PCS_CON_001.php';
		$polEffDate 	= $_SESSION["startSessionDateTime"] ;
		$polExpDate 	= date("Y-m-d 16:30:00", strtotime("+12 Months"));
		}
		else if($quoQueryResultSize==1){
		echo "WHEN RECORDS HAS ALREADY SAVED OR SUBMITTED&BACK<br>";
		$row 		= $quoQueryResult->fetch_assoc();
		include 'config/Condition/PCS_CON_002.php';
		}
		else{
		echo "RECORDS MORE THAN ONE ROW";
		}
	}
}	

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

	var provID;
	var distID;
	var subDistID;
	    function dochangeLocation(src, val) {
        	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {
		     	document.getElementById(src).innerHTML = xhttp.responseText;
		    	}
		  	};
		  	// alert(val);
		  	switch (src) {
				case 'addrProv':
				break;
            	case 'addrDist':
            	provID=val;
				break;
				case 'addrSubDist':
            	distID=val;
            	break;
            	case 'addrZipCode':
            	subDistID=val;
            	break;
            	default:
				break;
            } 
            
            // alert("provID:"+provID+" distID:"+distID+"subDistID:"+subDistID);
		  	 xhttp.open("GET", "location.php?data="+src+"&val="+val+"&provID="+provID+"&distID="+distID+"&subDistID="+subDistID); //สร้าง connection
             xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             xhttp.send(null); //ส่งค่า
        }

	var tarPower;
	var tarBody;
	var tarSubBody;
	var tarUsage;
	    function dochangeTariff(src, val) {
	    	//alert(src);
        	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {
		     	document.getElementById(src).innerHTML = xhttp.responseText;
		    	}
		  	};

	
		  	switch (src) {
            	case 'tarBody':
            	tarPower=val;
				break;
				case 'tarSubBody':
            	tarBody=val;
            	break;
            	case 'tarUsage':
            	tarSubBody=val;
            	break;
            	case 'tarVehCodePK':
            	tarUsage=val;
            	break;
            	default:
				break;
            } 
		  
		  	 xhttp.open("GET", "tariff.php?data="+src+"&val="+val+"&tarPower="+tarPower+"&tarBody="+tarBody+"&tarSubBody="+tarSubBody+"&tarUsage="+tarUsage); //สร้าง connection
             xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             xhttp.send(null); //ส่งค่า
        }

        var redMake;
		var redModel;
		var redYear;
		var redDesc;
		function dochangeRedbook(src, val) {
	    	// alert(src);
        	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {
		     	document.getElementById(src).innerHTML = xhttp.responseText;
		    	}
		  	};

		  	switch (src) {
            	case 'redModel':
            	redMake=val;
				break;
				case 'redYear':
            	redModel=val;
				break;
				case 'redDesc':
            	redYear=val;
				break;
				case 'redKey':
            	redDesc=val;
				break;
			
            	default:
				break;
            } 
		  
		  	 xhttp.open("GET", "redbook.php?data="+src+"&val="+val+"&redMake="+redMake+"&redModel="+redModel+"&redYear="+redYear+"&redDesc="+redDesc); //สร้าง connection
             xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             xhttp.send(null); //ส่งค่า
        }

        function dochangePoliycInfo(src, val) {
	    	// alert(src);
        	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {
		     	document.getElementById(src).innerHTML = xhttp.responseText;
		    	}
		  	};
		  	 xhttp.open("GET", "policyInfo.php?data="+src); //สร้าง connection
             xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             xhttp.send(null); //ส่งค่า
        }

        function myFunction(){
        	window.onLoad=dochangeLocation('addrProv', -1);   
        	window.onLoad=dochangeTariff('tarPower', -1);  
        	window.onLoad=dochangeRedbook('redMake', -1);  
        	window.onLoad=dochangePoliycInfo('perCardType', -1);
        	window.onLoad=dochangePoliycInfo('addrContType1', -1);
        	window.onLoad=dochangePoliycInfo('perSalu', -1);
        	window.onLoad=dochangePoliycInfo('test', -1);
    	}
</script>
</head>

<body onload="myFunction()">
	<form action="policySaveStep1.php" method="post">
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1>&nbsp;พ. ร. บ.</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>ข้อมูลกรรมธรรม์</b>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" align="left">เลขกรมธรรม์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Enter Chassis Number" 
						id="polQuoNum" name="polQuoNum" value='<?php echo $_SESSION["polQuoNum"]; ?>'>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" align="left">วันที่เริ่มคุ้มครอง :</div>
				<div class="col-md-3">
					<div class="input-group date" id="datepicker">
						<input type="text" class="form-control" placeholder="วันที่เริ่มคุ้มครอง" 
							id="polEffDate" name="polEffDate" value='<?php echo $polEffDate; ?>'>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
				<div class="col-md-3" align="right">วันสิ้นสุดความคุ้มครอง:</div>
				<div class="col-md-3">
					<div class="input-group date" data-provide="datepicker">
						<input type="text" class="form-control" placeholder="วันสิ้นสุดความคุ้มครอง" 
							id="polExpDate" name="polExpDate" value='<?php echo $polExpDate ?>'>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>ข้อมูลรถ</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ยี่ห้อ :</div>
				<div class="col-md-2" name="redMake" id="redMake">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">รุ่น :</div>
				<div class="col-md-2" name="redModel" id="redModel">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">ปี :</div>
				<div class="col-md-2" name="redYear" id="redYear">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">รุ่นย่อย :</div>
				<div class="col-md-2" name="redDesc" id="redDesc" >
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				
				<div class="col-md-2" align="right">รหัสรถ :</div>
				<div class="col-md-2" id="redKey">
					<input type="text" class="form-control" placeholder="รหัสรถ">
				</div>
				<div class="col-md-2" align="right"><a href="#">เพิ่มรุ่นรถ</a></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">การขับเคลื่อน :</div>
				<div class="col-md-2" name="tarPower" id="tarPower">
				<select class="form-control">
						<option>กรุณาเลือก</option>
				</select>		
				</div>

				<div class="col-md-2" align="right">ประเภท :</div>
				<div class="col-md-2" name="tarBody" id="tarBody">
				<select class="form-control">
						<option>กรุณาเลือก</option>
				</select>	
				</div>
				
				<div class="col-md-2" align="right">ประเภทย่อย :</div>
				<div class="col-md-2" name="tarSubBody" id="tarSubBody" >
				<select class="form-control">
						<option>กรุณาเลือก</option>
				</select>	
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">การใช้งาน :</div>
				<div class="col-md-2" name="tarUsage" id="tarUsage">
				<select class="form-control">
						<option>กรุณาเลือก</option>
				</select>	
				</div>		
				<div class="col-md-2" align="right">รหัสรถ :</div>
				<div class="col-md-2" id="tarVehCodePK" name="tarVehCodePK" >
					<input type="text" class="form-control" placeholder="Vehical Code">
					Net Premium<input type="text" class="form-control" id="premStdNet" name="premStdNet" placeholder="Net Premium">	
					Vat<input type="text" class="form-control" id="premStdVat" name="premStdVat" placeholder="Vat">	
					Stamp Duty<input type="text" class="form-control" id="premStdStampDuty" name="premStdStampDuty" placeholder="Stamp Duty">
					Total Premium<input type="text" class="form-control" id="premStdTotal" name="premStdTotal" placeholder="Total Premium">	
				</div>
			</div>	
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ความจุ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehCapacity" name="vehCapacity" value='<?php echo $vehCapacity ?>'
						placeholder="Enter Capacity">
				</div>
				<div class="col-md-2" align="right">น้ำหนัก :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehWeight" name="vehWeight" value='<?php echo $vehWeight ?>'
						placeholder="Enter Tonnage">
				</div>
				<div class="col-md-2" align="right">จำนวนที่นั่ง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehSeat" name="vehSeat" value='<?php echo $vehSeat ?>'
						placeholder="Enter Seats">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขตัวถัง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehChassisNum" name="vehChassisNum" value='<?php echo $vehChassisNum ?>'
						placeholder="Enter Chassis Number">
				</div>
				<div class="col-md-2" align="right">ทะเบียนรถ:</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehLicenseNum" name="vehLicenseNum" value='<?php echo $vehLicenseNum ?>'
						placeholder="ทะเบียนรถ">
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" align="left">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>ข้อมูลผู้ถือกรมธรรม์</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">คำนำหน้าชื่อ :</div>
				<div class="col-md-2" id="perSalu" name="perSalu">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">ชื่อ-นามสกุล :</div>
				<div class="col-md-2">
					ชื่อ<input type="text" class="form-control" id="perFName" name="perFName" value='<?php echo $perFName ?>'
						placeholder="ชื่อ" >
					นามสกุล<input type="text" class="form-control" id="perLName" name="perLName" value='<?php echo $perLName ?>'
						placeholder="นามสกุล" >
				</div>
				<div class="col-md-2" align="right">วันเกิด :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perDOB" name="perDOB" data-format="yyyy-MM-dd" value="0000-00-00"
						placeholder="วันเกิด" >
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ประเภทบัตร :</div>
				<div class="col-md-2" name="perCardType" id="perCardType"> 
					<select class="form-control">				
					<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">เลขที่บัตร :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perCardNo" name="perCardNo" value='<?php echo $perCardNo ?>'
						placeholder="เลขที่บัตร" >
				</div>
				<div class="col-md-2" align="right">วันหมดอายุ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="perExpDate" name="perExpDate" data-format="yyyy-MM-dd" value="0000-00-00"
						placeholder="วันหมดอายุ">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">บ้านเลขที่1 :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="addrLine1" name="addrLine1" value='<?php echo $addrLine1 ?>'
						placeholder="ที่อยู่">
				</div>
				<div class="col-md-2" align="left">บ้านเลขที่2 :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="addrLine2" name="addrLine2" value='<?php echo $addrLine2 ?>'
						placeholder="ที่อยู่">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">จังหวัด :</div>
				<div class="col-md-2" id="addrProv" name="addrProv">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">แขวง/อำเภอ :</div>
				<div class="col-md-2" id="addrDist" name="addrDist">
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>	
				</div>
				<div class="col-md-2" align="right">เขต/ตำบล :</div>
				<div class="col-md-2" id="addrSubDist" name="addrSubDist">
					<select class="form-control">
						<option>กรุณาเลือก</option>	
					</select>	
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">รหัสไปรษณีย์ :</div>
				<div class="col-md-2" id="addrZipCode" name="addrZipCode">
					<select class="form-control" >
						<option>กรุณาเลือก</option>
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
				<div class="col-md-2" name="addrContType1" id="addrContType1"> 
					<select class="form-control">
						<option>กรุณาเลือก</option>
					</select>
				</div>
				<div class="col-md-2" align="right">เบอร์ติดต่อ:</div>
				<div class="col-md-2">
					<input type="text" class="form-control"  name="addrContNum1" id="addrContNum1"
						placeholder="เบอร์ติดต่อ">
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
include 'footer.php'; 
?>
</footer>
</html>