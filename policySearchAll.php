<?php 
include 'config/config.php'; 
include 'header.php'; 

$conn = connOpen();

if(isset($_POST['sBy']) && isset($_POST['sDesc'])){
$sBy = trim($_POST['sBy']);
$sDesc = trim($_POST['sDesc']);

if($sDesc==""){
$sDesc = "null";
}
// echo "<br>sBy: ". $sBy;
// echo "<br>sDesc: ". $sDesc;

$sqlID = "PSA_002";
setSearchCriteria($sBy,$sDesc);
$searchResult 	= executeSql($conn,$sqlID);
	if($searchResult){

	}
}
else{
$sqlID = "PSA_001";
$searchResult 	= executeSql($conn,$sqlID);

	if($searchResult){

	}
}
$searchResultSize = $searchResult->num_rows;
// SELECT * 
// FROM Policy p JOIN PolicyStatus s
// ON p.`POL_Status_ID_FK`=s.`POL_Status_ID_PK`
// ORDER BY p.`POL_ID_PK`;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<script src="config/bootstrap/js/bootstrap.min.js"></script>
<title><?php echo $policySearch; ?></title>
</head>
<body>
		<form action="policySearchAll.php" id="cmi" method="POST">
		<div class="container">
			<div class="page-header">
				<h1>พ ร บ.</h1>
			</div>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Search Criteria</a></li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<br>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-12" align="left">
					Search by: 
					<select name="sBy" id="sBy">
						<option name="sBy" id="sBy" value="0">กรุณาเลือก</option>
						<option name="sBy" id="sBy" value="POL_QuoNum">Policy No.</option>
						<option name="sBy" id="sBy" value="POL_StatusName_EN">Status</option>
					</select>	
					<input type="text" name="sDesc"/>
					<input type="Submit" class="btn btn-primary btn-md" value="Search"/>
					<a href="policySearchAll.php"><input type="Button" value="Reset" class="btn btn-primary btn-md"/></a>
				</form>		
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br>
				</div>
			</div>
		
			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Policy Information</a></li>
			</ul>
			<div class="row">
				<div class="col-md-2">
					<?php echo "<br>Found ".$searchResultSize." records"; ?>
					<b><br></b>
				</div>
			</div>
			<table border="0" align="left">
			<tr>
				<th>No.</th>
				<th>Policy No.</th>
				<th>Status</th>
				<th>Effective Date</th>
				<th></th>
			</tr>
			<?php 
					if ($searchResult->num_rows > 0) {
				    // output data of each row
					$no=1;
				    while($searchRow = $searchResult->fetch_assoc()) {
				        ?>
				    <tr>
				   
				    	<td><?php echo $no++; ?></td>
						<td><?php echo $searchRow["POL_QuoNum"] ?></td>
						<td><?php echo $searchRow["POL_StatusName_EN"] ?></td>
						<td><?php echo $searchRow["POL_EffDate"] ?></td>
						<td>
						<form action="policySearchCheck.php" id="cmi" method="GET">	
							<input type="hidden" name="polStatusIDFK" id='<?php echo $searchRow["POL_Status_ID_FK"] ?>' value='<?php echo $searchRow["POL_Status_ID_FK"] ?>'/>
							<input type="hidden" name="polQuoNum" id='<?php echo $searchRow["POL_ID_PK"] ?>' value='<?php echo $searchRow["POL_QuoNum"] ?>'/>
							<input type="Submit"/>
						</form>	
						</td>
					</tr>
				    	<?php	
				    	}
					} else {
						?>
					    
				 	<tr>
				    	<td><?php echo "0 results"; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php
					}
				?>
			</table>
			</fieldset>
		</div>
	</form>
</html>