<?php
//..others field
$polIDPK=$row["POL_ID_PK"];
$polMasPolNum=$row["POL_MasPolNum"];
$polQuoNum=$row["POL_QuoNum"];
$polNum=$row["POL_Num"];
$polCat=$row["POL_Cat"];
$polReFlag=$row["POL_ReFlag"];
$polStatusIDFK=$row["POL_Status_ID_FK"];
$polEffDate=$row["POL_EffDate"];
$polExpDate=$row["POL_ExpDate"];
$polQuoCreateDate=$row["POL_QuoCreateDate"];
$polQuoDate=$row["POL_QuoDate"];
$polProDate=$row["POL_ProDate"];
$polAppReceivedDate=$row["POL_AppReceivedDate"];
$polIssueDate=$row["POL_IssueDate"];
$polIssueBy=$row["POL_IssueBy"];
$polPRODIDFK=$row["POL_PROD_ID_FK"];
$polPREMIDFK=$row["POL_PREM_ID_FK"];
$polCUSIDFKPHD=$row["POL_CUS_ID_FK_PHD"];
$polCUSAddrIDPHD=$row["POL_CUS_Addr_ID_PHD"];
$polCUSIDFKINS=$row["POL_CUS_ID_FK_INS"];
$polCUSAddrIDINS=$row["POL_CUS_Addr_ID_INS"];
$polVEHIDFK=$row["POL_VEH_ID_FK"];
$polUpdatedDate=$row["POL_UpdatedDate"];
$polUpdatedBy=$row["POL_UpdatedBy"];
$polStatusIDPK=$row["POL_Status_ID_PK"];
$polStatusNameEN=$row["POL_StatusName_EN"];
$polStatusNameTH=$row["POL_StatusName_TH"];
$polStatusDesc=$row["POL_StatusDesc"];
$polStatusUpdatedDate=$row["POL_Status_UpdatedDate"];
$polStatusUpdatedBy=$row["POL_Status_UpdatedBy"];
$vehIDPK=$row["VEH_ID_PK"];
$vehTARIDFK=$row["VEH_TAR_ID_FK"];;
$vehTARVehCodeFK=$row["VEH_TAR_VehCode_FK"];
$vehREDKEYFK=$row["VEH_RED_KEY_FK"];
$vehLicenseNum=$row["VEH_LicenseNum"];
$vehChassisNum=$row["VEH_ChassisNum"];
$vehCapacity=$row["VEH_Capacity"];
$vehSeat=$row["VEH_Seat"];
$vehWeight=$row["VEH_Weight"];
$vehEngineNum=$row["VEH_EngineNum"];
$vehNewCar=$row["VEH_NewCar"];
$vehDriveArea=$row["VEH_DriveArea"];
$vehProvIDFK=$row["VEH_Prov_ID_FK"];
$vehColor=$row["VEH_Color"];
$vehCountry=$row["VEH_Country"];
$vehQuoNumRef=$row["VEH_QuoNumRef"];
$vehUpdatedDate=$row["VEH_UpdatedDate"];
$vehUpdatedBy=$row["VEH_UpdatedBy"];
$perIDPK=$row["PER_ID_PK"];
$perSalu=$row["PER_Salu"];
$perFName=$row["PER_FName"];
$perMName=$row["PER_MName"];
$perLName=$row["PER_LName"];
$perDOB=$row["PER_DOB"];
$perCardType=$row["PER_CardType"];
$perCardNo=$row["PER_CardNo"];
$perExpDate=$row["PER_ExpDate"];
$perUpdatedDate=$row["PER_UpdatedDate"];
$perUpdatedBy=$row["PER_UpdatedBy"];
$addrIDPK=$row["ADDR_ID_PK"];
$addrLine1=$row["ADDR_Line1"];
$addrLine2=$row["ADDR_Line2"];
$addrSubDist=$row["ADDR_SubDist"];
$addrDist=$row["ADDR_Dist"];
$addrProv=$row["ADDR_Prov"];
$addrZipCode=$row["ADDR_ZipCode"];
$addrGeo=$row["ADDR_Geo"];
$addrEmail=$row["ADDR_Email"];
$addrContType1=$row["ADDR_ContType1"];
$addrContNum1=$row["ADDR_ContNum1"];
$addrContType2=$row["ADDR_ContType2"];
$addrContNum2=$row["ADDR_ContNum2"];
$addrUpdatedDate=$row["ADDR_UpdatedDate"];
$addrUpdatedBy=$row["ADDR_UpdatedBy"];
$redIDPK=$row["RED_ID_PK"];
$redKey=$row["RED_Key"];
$redMake=$row["RED_Make"];
$redModel=$row["RED_Model"];
$redYear=$row["RED_Year"];
$redDesc=$row["RED_Desc"];
$redAvgWholesale=$row["RED_AvgWholesale"];
$redAvgRetail=$row["RED_AvgRetail"];
$redGoodWholesale=$row["RED_GoodWholesale"];
$redGoodRetail=$row["RED_GoodRetail"];
$redNewPrice=$row["RED_NewPrice"];
$redGroup=$row["RED_Group"];
$redType=$row["RED_Type"];
$redJanpaneseCar=$row["RED_JanpaneseCar"];
$redECO=$row["RED_ECO"];
$redUpdatedDate=$row["RED_UpdatedDate"];
$redUpdatedBy=$row["RED_UpdatedBy"];
$tarIDPK=$row["TAR_ID_PK"];
$tarVehCodePK=$row["TAR_VehCode_PK"];
$tarBodyNameEN=$row["TAR_BodyName_EN"];
$tarBodyNameTH=$row["TAR_BodyName_TH"];
$tarSubBodyNameEN=$row["TAR_SubBodyName_EN"];
$tarSubBodyNameTH=$row["TAR_SubBodyName_TH"];
$tarUsageNameEN=$row["TAR_UsageName_EN"];
$tarUsageNameTH=$row["TAR_UsageName_TH"];
$tarCCMin=$row["TAR_CC_Min"];
$tarCCMax=$row["TAR_CC_Max"];
$tarSeatMin=$row["TAR_Seat_Min"];
$tarSeatMax=$row["TAR_Seat_Max"];
$tarTonMin=$row["TAR_Ton_Min"];
$tarTonMax=$row["TAR_Ton_Max"];
$tarPrem=$row["TAR_Prem"];
$tarVat=$row["TAR_Vat"];
$tarStampDuty=$row["TAR_StampDuty"];
$tarTotalPrem=$row["TAR_TotalPrem"];
$tarUpdatedDate=$row["TAR_UpdatedDate"];
$tarUpdatedBy=$row["TAR_UpdatedBy"];
$premIDPK=$row["PREM_ID_PK"];
$premStdNet=$row["PREM_StdNet"];
$premStdVat=$row["PREM_StdVat"];
$premStdStampDuty=$row["PREM_StdStampDuty"];
$premStdTotal=$row["PREM_StdTotal"];
$premPercentVat=$row["PREM_PercentVat"];
$premPerDiscount=$row["PREM_PerDiscount"];
$premDiscountFlag=$row["PREM_DiscountFlag"];
$premDiscount=$row["PREM_Discount"];
$premNet=$row["PREM_Net"];
$premStampDuty=$row["PREM_StampDuty"];
$premVat=$row["PREM_Vat"];
$premTotal=$row["PREM_Total"];
$premQuoNumRef=$row["PREM_QuoNumRef"];
$premUpdatedDate=$row["PREM_UpdatedDate"];
$premUpdatedBy=$row["PREM_UpdatedBy"];

// echo "polIDPK".$polIDPK."<br>";
// echo "polMasPolNum".$polMasPolNum."<br>";
// echo "polQuoNum".$polQuoNum."<br>";
// echo "polNum".$polNum."<br>";
// echo "polCat".$polCat."<br>";
// echo "polReFlag".$polReFlag."<br>";
// echo "polStatusIDFK".$polStatusIDFK."<br>";
// echo "polEffDate".$polEffDate."<br>";
// echo "polExpDate".$polExpDate."<br>";
// echo "polQuoCreateDate".$polQuoCreateDate."<br>";
// echo "polQuoDate".$polQuoDate."<br>";
// echo "polProDate".$polProDate."<br>";
// echo "polAppReceivedDate".$polAppReceivedDate."<br>";
// echo "polIssueDate".$polIssueDate."<br>";
// echo "polIssueBy".$polIssueBy."<br>";
// echo "polPRODIDFK".$polPRODIDFK."<br>";
// echo "polPREMIDFK".$polPREMIDFK."<br>";
// echo "polCUSIDFKPHD".$polCUSIDFKPHD."<br>";
// echo "polCUSAddrIDPHD".$polCUSAddrIDPHD."<br>";
// echo "polCUSIDFKINS".$polCUSIDFKINS."<br>";
// echo "polCUSAddrIDINS".$polCUSAddrIDINS."<br>";
// echo "polVEHIDFK".$polVEHIDFK."<br>";
// echo "polUpdatedDate".$polUpdatedDate."<br>";
// echo "polUpdatedBy".$polUpdatedBy."<br>";
// echo "polStatusIDPK".$polStatusIDPK."<br>";
// echo "polStatusNameEN".$polStatusNameEN."<br>";
// echo "polStatusNameTH".$polStatusNameTH."<br>";
// echo "polStatusDesc".$polStatusDesc."<br>";
// echo "polStatusUpdatedDate".$polStatusUpdatedDate."<br>";
// echo "polStatusUpdatedBy".$polStatusUpdatedBy."<br>";
// echo "vehIDPK".$vehIDPK."<br>";
// echo "vehTARVehCodeFK".$vehTARVehCodeFK."<br>";
// echo "vehREDKEYFK".$vehREDKEYFK."<br>";
// echo "vehLicenseNum".$vehLicenseNum."<br>";
// echo "vehChassisNum".$vehChassisNum."<br>";
// echo "vehCapacity".$vehCapacity."<br>";
// echo "vehSeat".$vehSeat."<br>";
// echo "vehWeight".$vehWeight."<br>";
// echo "vehEngineNum".$vehEngineNum."<br>";
// echo "vehNewCar".$vehNewCar."<br>";
// echo "vehDriveArea".$vehDriveArea."<br>";
// echo "vehProvIDFK".$vehProvIDFK."<br>";
// echo "vehColor".$vehColor."<br>";
// echo "vehCountry".$vehCountry."<br>";
// echo "vehQuoNumRef".$vehQuoNumRef."<br>";
// echo "vehUpdatedDate".$vehUpdatedDate."<br>";
// echo "vehUpdatedBy".$vehUpdatedBy."<br>";
// echo "perIDPK".$perIDPK."<br>";
// echo "perSalu".$perSalu."<br>";
// echo "perFName".$perFName."<br>";
// echo "perMName".$perMName."<br>";
// echo "perLName".$perLName."<br>";
// echo "perDOB".$perDOB."<br>";
// echo "perCardType".$perCardType."<br>";
// echo "perCardNo".$perCardNo."<br>";
// echo "perExpDate".$perExpDate."<br>";
// echo "perUpdatedDate".$perUpdatedDate."<br>";
// echo "perUpdatedBy".$perUpdatedBy."<br>";
// echo "addrIDPK".$addrIDPK."<br>";
// echo "addrLine1".$addrLine1."<br>";
// echo "addrLine2".$addrLine2."<br>";
// echo "addrSubDist".$addrSubDist."<br>";
// echo "addrDist".$addrDist."<br>";
// echo "addrProv".$addrProv."<br>";
// echo "addrZipCode".$addrZipCode."<br>";
// echo "addrGeo".$addrGeo."<br>";
// echo "addrEmail".$addrEmail."<br>";
// echo "addrContType1".$addrContType1."<br>";
// echo "addrContNum1".$addrContNum1."<br>";
// echo "addrContType2".$addrContType2."<br>";
// echo "addrContNum2".$addrContNum2."<br>";
// echo "addrUpdatedDate".$addrUpdatedDate."<br>";
// echo "addrUpdatedBy".$addrUpdatedBy."<br>";
// echo "redIDPK".$redIDPK."<br>";
// echo "redKey".$redKey."<br>";
// echo "redMake".$redMake."<br>";
// echo "redModel".$redModel."<br>";
// echo "redYear".$redYear."<br>";
// echo "redDesc".$redDesc."<br>";
// echo "redAvgWholesale".$redAvgWholesale."<br>";
// echo "redAvgRetail".$redAvgRetail."<br>";
// echo "redGoodWholesale".$redGoodWholesale."<br>";
// echo "redGoodRetail".$redGoodRetail."<br>";
// echo "redNewPrice".$redNewPrice."<br>";
// echo "redGroup".$redGroup."<br>";
// echo "redType".$redType."<br>";
// echo "redJanpaneseCar".$redJanpaneseCar."<br>";
// echo "redECO".$redECO."<br>";
// echo "redUpdatedDate".$redUpdatedDate."<br>";
// echo "redUpdatedBy".$redUpdatedBy."<br>";
// echo "tarIDPK".$tarIDPK."<br>";
// echo "tarVehCodePK".$tarVehCodePK."<br>";
// echo "tarBodyNameEN".$tarBodyNameEN."<br>";
// echo "tarBodyNameTH".$tarBodyNameTH."<br>";
// echo "tarSubBodyNameEN".$tarSubBodyNameEN."<br>";
// echo "tarSubBodyNameTH".$tarSubBodyNameTH."<br>";
// echo "tarUsageNameEN".$tarUsageNameEN."<br>";
// echo "tarUsageNameTH".$tarUsageNameTH."<br>";
// echo "tarCCMin".$tarCCMin."<br>";
// echo "tarCCMax".$tarCCMax."<br>";
// echo "tarSeatMin".$tarSeatMin."<br>";
// echo "tarSeatMax".$tarSeatMax."<br>";
// echo "tarTonMin".$tarTonMin."<br>";
// echo "tarTonMax".$tarTonMax."<br>";
// echo "tarPrem".$tarPrem."<br>";
// echo "tarVat".$tarVat."<br>";
// echo "tarStampDuty".$tarStampDuty."<br>";
// echo "tarTotalPrem".$tarTotalPrem."<br>";
// echo "tarUpdatedDate".$tarUpdatedDate."<br>";
// echo "tarUpdatedBy".$tarUpdatedBy."<br>";
// echo "premIDPK".$premIDPK."<br>";
// echo "premStdNet".$premStdNet."<br>";
// echo "premStdVat".$premStdVat."<br>";
// echo "premStdStampDuty".$premStdStampDuty."<br>";
// echo "premStdTotal".$premStdTotal."<br>";
// echo "premPercentVat".$premPercentVat."<br>";
// echo "premPerDiscount".$premPerDiscount."<br>";
// echo "premDiscountFlag".$premDiscountFlag."<br>";
// echo "premDiscount".$premDiscount."<br>";
// echo "premNet".$premNet."<br>";
// echo "premStampDuty".$premStampDuty."<br>";
// echo "premVat".$premVat."<br>";
// echo "premTotal".$premTotal."<br>";
// echo "premQuoNumRef".$premQuoNumRef."<br>";
// echo "premUpdatedDate".$premUpdatedDate."<br>";
// echo "premUpdatedBy".$premUpdatedBy."<br>";

?>
