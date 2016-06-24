<?php 
require_once('config/config.php'); 
session_start();
$conn = connOpen();
$polQuoCreateDate=$_SESSION["startSessionDateTime"];
$polQuoNum=$_SESSION["polQuoNum"];
echo "polQuoNum: ".$polQuoNum."<br>";
$polUpdatedBy=$_SESSION["usrName"];

setPolQuoNum($polQuoNum);
$sqlID = "PSS1_001";					
$polSearchResult = executeSql($conn,$sqlID);	
if($polSearchResult){
$polSearchSize = $polSearchResult->num_rows;
echo "polSearchSize: ".$polSearchSize."<br>";
include 'config/Condition/PSS_CON_001.php';
	if($polSearchSize==0){
		getAlertMsg("CREATE NEW POLICY");
		//Policyholder Information		
		$sqlID ="PSS1_003";
		setPolicyHolderInfo(
		// $perIDPK,
		$perSalu,
		$perFName,
		$perMName,
		$perLName,
		$perDOB,
		$perCardType,
		$perCardNo,
		$perExpDate,
		$perUpdatedDate,
		$perUpdatedBy
		);
		$perInsertResult = executeSql($conn,$sqlID);
			if ($perInsertResult){
			$perIDPK = $conn->insert_id;
			}

		$sqlID ="PSS1_005";
		setAddressInfo(
		// $addrIDPK,
		$addrLine1,
		$addrLine2,
		$addrSubDist,
		$addrDist,
		$addrProv,
		$addrZipCode,
		$addrGeo,
		$addrEmail,
		$addrContType1,
		$addrContNum1,
		$addrContType2,
		$addrContNum2,
		$addrUpdatedDate,
		$addrUpdatedBy
		);
		$addrInsertResult = executeSql($conn,$sqlID);
			if ($addrInsertResult){
			$addrIDPK = $conn->insert_id;
			}
		// POL_Status_ID_FK: 1=Quote in Progress	
		//Save process

		$sqlID ="PSS1_007";
		setPremiumInfo(
		// $premIDPK,
		$premStdNet,
		$premStdVat,
		$premStdStampDuty,
		$premStdTotal,
		$premPercentVat,
		$premPerDiscount,
		$premDiscountFlag,
		$premDiscount,
		$premNet,
		$premStampDuty,
		$premVat,
		$premTotal,
		$premQuoNumRef,
		$premUpdatedDate,
		$premUpdatedBy
		);
		$premInsertResult = executeSql($conn,$sqlID);
			if ($premInsertResult){
			$premIDPK = $conn->insert_id;
			}	

		$sqlID ="PSS1_006";
		setVehicalInfo(
		// $vehIDPK,
		$vehTARVehCodeFK,
		$vehREDKEYFK,
		$vehLicenseNum,
		$vehChassisNum,
		$vehCapacity,
		$vehSeat,
		$vehWeight,
		$vehEngineNum,
		$vehNewCar,
		$vehDriveArea,
		$vehProvIDFK,
		$vehColor,
		$vehCountry,
		$vehQuoNumRef,
		$vehUpdatedDate,
		$vehUpdatedBy
		);
		$vehInsertResult = executeSql($conn,$sqlID);
			if ($vehInsertResult){
			$vehIDPK = $conn->insert_id;
			}	

	$sqlID ="PSS1_002";
	setPolicyInfo(
	// $polIDPK,	
	$polMasPolNum,
	$polQuoNum,
	$polNum,
	$polCat,
	$polReFlag,
	$polStatusIDFK,
	$polEffDate,
	$polExpDate,
	$polQuoCreateDate,
	$polQuoDate,
	$polProDate,
	$polAppReceivedDate,
	$polIssueDate,
	$polIssueBy,
	$polPRODIDFK,
	$polPREMIDFK=$premIDPK,
	$polCUSIDFKPHD=$perIDPK,
	$polCUSAddrIDPHD=$addrIDPK,
	$polCUSIDFKINS=$perIDPK,
	$polCUSAddrIDINS=$addrIDPK,
	$polVEHIDFK=$vehIDPK,
	$polUpdatedDate,
	$polUpdatedBy
	);
	$polInsertResult = executeSql($conn,$sqlID);
	//return 1=TRUE 0=FALSE
		if ($polInsertResult) {
		getAlertMsg("Save successfully (PSS1_101)");
		}
	}
	else{
	getAlertMsg("UPDATE EXISTING POLICY");	
	setPolicyUpdate(
	// $polIDPK=trim($_POST['polIDPK']),
	// $polMasPolNum=trim($_POST['polMasPolNum']),
	$polQuoNum=trim($_POST['polQuoNum']),
	// $polNum=trim($_POST['polNum']),
	// $polCat=trim($_POST['polCat']),
	// $polReFlag=trim($_POST['polReFlag']),
	// $polStatusIDFK=trim($_POST['polStatusIDFK']),
	// $polEffDate=trim($_POST['polEffDate']),
	// $polExpDate=trim($_POST['polExpDate']),
	// $polQuoCreateDate=trim($_POST['polQuoCreateDate']),
	// $polQuoDate=trim($_POST['polQuoDate']),
	// $polProDate=trim($_POST['polProDate']),
	// $polAppReceivedDate=trim($_POST['polAppReceivedDate']),
	// $polIssueDate=trim($_POST['polIssueDate']),
	// $polIssueBy=trim($_POST['polIssueBy']),
	// $polPRODIDFK=trim($_POST['polPRODIDFK']),
	// $polPREMIDFK=trim($_POST['polPREMIDFK']),
	// $polCUSIDFKPHD=trim($_POST['polCUSIDFKPHD']),
	// $polCUSAddrIDPHD=trim($_POST['polCUSAddrIDPHD']),
	// $polCUSIDFKINS=trim($_POST['polCUSIDFKINS']),
	// $polCUSAddrIDINS=trim($_POST['polCUSAddrIDINS']),
	// $polVEHIDFK=trim($_POST['polVEHIDFK']),
	// $polUpdatedDate=trim($_POST['polUpdatedDate']),
	// $polUpdatedBy=trim($_POST['polUpdatedBy']),
	// $polStatusIDPK=trim($_POST['polStatusIDPK']),
	// $polStatusNameEN=trim($_POST['polStatusNameEN']),
	// $polStatusNameTH=trim($_POST['polStatusNameTH']),
	// $polStatusDesc=trim($_POST['polStatusDesc']),
	// $polStatusUpdatedDate=trim($_POST['polStatusUpdatedDate']),
	// $polStatusUpdatedBy=trim($_POST['polStatusUpdatedBy']),
	// $vehIDPK=trim($_POST['vehIDPK']),
	// $vehTARVehCodeFK=trim($_POST['vehTARVehCodeFK']),
	// $vehREDKEYFK=trim($_POST['vehREDKEYFK']),
	// $vehLicenseNum=trim($_POST['vehLicenseNum']),
	// $vehChassisNum=trim($_POST['vehChassisNum']),
	// $vehCapacity=trim($_POST['vehCapacity']),
	// $vehSeat=trim($_POST['vehSeat']),
	// $vehWeight=trim($_POST['vehWeight']),
	// $vehEngineNum=trim($_POST['vehEngineNum']),
	// $vehNewCar=trim($_POST['vehNewCar']),
	// $vehDriveArea=trim($_POST['vehDriveArea']),
	// $vehProvIDFK=trim($_POST['vehProvIDFK']),
	// $vehColor=trim($_POST['vehColor']),
	// $vehCountry=trim($_POST['vehCountry']),
	// $vehUpdatedDate=trim($_POST['vehUpdatedDate']),
	// $vehUpdatedBy=trim($_POST['vehUpdatedBy']),
	// $perIDPK=trim($_POST['perIDPK']),
	// $perSalu=trim($_POST['perSalu']),
	$perFName=trim($_POST['perFName']),
	// $perMName=trim($_POST['perMName']),
	$perLName=trim($_POST['perLName']),
	// $perDOB=trim($_POST['perDOB']),
	// $perCardType=trim($_POST['perCardType']),
	$perCardNo=trim($_POST['perCardNo']),
	// $perExpDate=trim($_POST['perExpDate']),
	// $perUpdatedDate=trim($_POST['perUpdatedDate']),
	// $perUpdatedBy=trim($_POST['perUpdatedBy']),
	// $addrIDPK=trim($_POST['addrIDPK']),
	// $addrLine1=trim($_POST['addrLine1']),
	// $addrLine2=trim($_POST['addrLine2']),
	// $addrSubDist=trim($_POST['addrSubDist']),
	$addrDist=trim($_POST['addrDist'])
	// $addrProv=trim($_POST['addrProv']),
	// $addrZipCode=trim($_POST['addrZipCode']),
	// $addrGeo=trim($_POST['addrGeo']),
	// $addrEmail=trim($_POST['addrEmail']),
	// $addrContType1=trim($_POST['addrContType1']),
	// $addrContNum1=trim($_POST['addrContNum1']),
	// $addrContType2=trim($_POST['addrContType2']),
	// $addrContNum2=trim($_POST['addrContNum2']),
	// $addrUpdatedDate=trim($_POST['addrUpdatedDate']),
	// $addrUpdatedBy=trim($_POST['addrUpdatedBy']),
	// $tarIDPK=trim($_POST['tarIDPK']),
	// $tarVehCodePK=trim($_POST['tarVehCodePK']),
	// $tarPowerNameEN=trim($_POST['tarPowerNameEN']),
	// $tarPowerNameTH=trim($_POST['tarPowerNameTH']),
	// $tarBodyNameTH=trim($_POST['tarBodyNameTH']),
	// $tarBodyNameEN=trim($_POST['tarBodyNameEN']),
	// $tarSubBodyNameTH=trim($_POST['tarSubBodyNameTH']),
	// $tarSubBodyNameEN=trim($_POST['tarSubBodyNameEN']),
	// $tarUsageNameTH=trim($_POST['tarUsageNameTH']),
	// $tarUsageNameEN=trim($_POST['tarUsageNameEN']),
	// $tarCCMin=trim($_POST['tarCCMin']),
	// $tarCCMax=trim($_POST['tarCCMax']),
	// $tarSeatMin=trim($_POST['tarSeatMin']),
	// $tarSeatMax=trim($_POST['tarSeatMax']),
	// $tarTonMin=trim($_POST['tarTonMin']),
	// $tarTonMax=trim($_POST['tarTonMax']),
	// $tarPrem=trim($_POST['tarPrem']),
	// $tarVat=trim($_POST['tarVat']),
	// $tarStampDuty=trim($_POST['tarStampDuty']),
	// $tarTotalPrem=trim($_POST['tarTotalPrem']),
	// $tarUpdatedDate=trim($_POST['tarUpdatedDate']),
	// $tarUpdatedBy=trim($_POST['tarUpdatedBy']),
	// $redIDPK=trim($_POST['redIDPK']),
	// $redKey=trim($_POST['redKey']),
	// $redMake=trim($_POST['redMake']),
	// $redModel=trim($_POST['redModel']),
	// $redYear=trim($_POST['redYear']),
	// $redDesc=trim($_POST['redDesc']),
	// $redAvgWholesale=trim($_POST['redAvgWholesale']),
	// $redAvgRetail=trim($_POST['redAvgRetail']),
	// $redGoodWholesale=trim($_POST['redGoodWholesale']),
	// $redGoodRetail=trim($_POST['redGoodRetail']),
	// $redNewPrice=trim($_POST['redNewPrice']),
	// $redGroup=trim($_POST['redGroup']),
	// $redType=trim($_POST['redType']),
	// $redJanpaneseCar=trim($_POST['redJanpaneseCar']),
	// $redECO=trim($_POST['redECO']),
	// $redUpdatedDate=trim($_POST['redUpdatedDate']),
	// $redUpdatedBy=trim($_POST['redUpdatedBy']),
	);

	$sqlID ="PSS1_008";
	$policyUpdateResult = executeSql($conn,$sqlID);
	}
}

//redirect("policyCreateStep1.php");
if($_POST['btn']=="save"){
// redirect("policyCreateStep1.php");		
echo "<a href='policyCreateStep1.php'><input type='Button' value='Next' class='btn btn-primary btn-md'/></a>";	
}
else{
// redirect("policyCreateStep2.php");
echo "<a href='policyCreateStep2.php'><input type='Button' value='Next' class='btn btn-primary btn-md'/></a>";
}
connClose($conn);

?>
