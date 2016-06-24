<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">

<title>Create CMI</title>
<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
</head>
<body>
	<form action="post" id="cmi" action="" method="post">
		<div class="container">
			<div class="page-header" style="background-color: #E0EEEE;">
				<h1>&nbsp;พ ร บ.</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #EBECE4; height: 30px;">
						<b>ระยะเวลาความคุ้มครอง</b>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">วันที่เริ่มคุ้มครอง :</div>
				<div class="col-md-3">
					<div class="input-group date" id="datepicker">
						<input type="text" class="form-control" id="sEffDate"
							placeholder="วันที่เริ่มคุ้มครอง">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>
				<div class="col-md-2" align="right">วันสิ้นสุดความคุ้มครอง :</div>
				<div class="col-md-3">
					<div class="input-group date" data-provide="datepicker">
						<input type="text" class="form-control" id="sEffDate"
							placeholder="วันสิ้นสุดความคุ้มครอง">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</div>

			</div>
			<br>
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
				<div class="col-md-2">
					<select name="sMake" class="form-control">
						<option>กรุณาเลือก</option>
						<option value="Honda">Honda</option>
						<option value="Toyota">Toyota</option>
						<option value="Mazda">Mazda</option>
					</select>
				</div>
				<div class="col-md-2" align="right">รุ่น :</div>
				<div class="col-md-2">
					<select name="sModel" class="form-control">
						<option>กรุณาเลือก</option>
						<option value="">xxx</option>
						<option value="">xxx</option>
						<option value="">xxx</option>
					</select>
				</div>
				<div class="col-md-2" align="right">ทะเบียนรถ</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="regNo"
						placeholder="ทะเบียนรถ">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">ความจุ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="cap"
						placeholder="Enter Capacity">
				</div>
				<div class="col-md-2" align="right">น้ำหนัก :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="ton"
						placeholder="Enter Tonnage">
				</div>
				<div class="col-md-2" align="right">จำนวนที่นั่ง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="nSeats"
						placeholder="Enter Seats">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">เลขตัวถัง :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="chas"
						placeholder="Enter Chassis Number">
				</div>
				<div class="col-md-2" align="right">รหัสรถ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="vehCode"
						placeholder="Vehicle Code">
				</div>
				<div class="col-md-2" align="right">รหัสตัวแทน :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="AgreeCode"
						placeholder="รหัสตัวแทน">
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
				<div class="col-md-2" align="left">ชื่อ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="fName"
						placeholder="ชื่อ">
				</div>
				<div class="col-md-2" align="right">นามสกุล :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="lName"
						placeholder="นามสกุล">
				</div>
				<div class="col-md-2" align="right">วันเกิด :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="dob"
						placeholder="วันเกิด">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">บ้านเลขที่ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="fName"
						placeholder="ที่อยู่">
				</div>
				<div class="col-md-2" align="right">แขวง/อำเภอ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="dist"
						placeholder="แขวง/อำเภอ">
				</div>
				<div class="col-md-2" align="right">เขต/ตำบล :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="subDist"
						placeholder="เขต/ตำบล">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">จังหวัด :</div>
				<div class="col-md-2">
					<select name="sMake" class="form-control">
						<option>กรุณาเลือก</option>
						<option value="Honda">Bangkok</option>
						<option value="Toyota">Chiangmai</option>
						<option value="Mazda">Chonburi</option>
					</select>
				</div>
				<div class="col-md-2" align="right">รหัสไปรษณีย์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="postCode"
						placeholder="รหัสไปรษณีย์">
				</div>
				<div class="col-md-2" align="right">เบอร์โทร :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="mobile"
						placeholder="เบอร์โทร">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2" align="left">อีเมล์ :</div>
				<div class="col-md-2">
					<input type="text" class="form-control" id="email"
						placeholder="อีเมล์">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" align="center">
					<button type="button" class="btn btn-primary btn-md">Save</button>
					<button type="button" class="btn btn-primary btn-md">Next</button>
				</div>
			</div>
		</div>
	</form>
</html>