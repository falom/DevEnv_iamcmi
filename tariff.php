<?php
    header("content-type: text/html; charset=utf-8");
    header ("Expires: Wed, 21 Aug 2013 13:13:13 GMT");
    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    
    include 'config/config.php'; 
    $conn   = connOpen();
    $data = $_GET['data'];
    $val = $_GET['val'];
    $tarPower = trim($_GET['tarPower']);
    $tarBody = trim($_GET['tarBody']);
    $tarSubBody = trim($_GET['tarSubBody']);
    $tarUsage = trim($_GET['tarUsage']);
         if ($data=='tarPower') { 
              $sqlID = "PCS1_013";
              $tarPowerResult = executeSql($conn,$sqlID);
              $tarPowerSize = $tarPowerResult->num_rows;
              echo "<select class='form-control' name='tarPower' id='tarPower' onChange=\"dochangeTariff('tarBody', this.value)\">\n";
              echo "<option value='0'>- เลือกการขับเคลื่อน -</option>\n";
              while($tarPowerRow = $tarPowerResult->fetch_assoc()){
                   echo "<option value='$tarPowerRow[TAR_PowerName_TH]' >$tarPowerRow[TAR_PowerName_TH]</option>" ;
              }
         } else if ($data=='tarBody') {
              setTariffID($tarPower,"","","");
              $sqlID = "PCS1_014";
              $tarBodyResult = executeSql($conn,$sqlID);
              echo "<select class='form-control' name='tarBody' id='tarBody' onChange=\"dochangeTariff('tarSubBody', this.value)\">\n";
              echo "<option value='0'>- เลือกประเภท -</option>\n";
              while($tarBodyRow = $tarBodyResult->fetch_assoc()){
                   echo "<option value='$tarBodyRow[TAR_BodyName_TH]' >$tarBodyRow[TAR_BodyName_TH]</option>" ;
              }
         } else if ($data=='tarSubBody') {
              setTariffID($tarPower,$tarBody,"","");
              $sqlID = "PCS1_015";
              $tarSubBodyResult = executeSql($conn,$sqlID);
              echo "<select class='form-control' name='tarSubBody' id='tarSubBody' onChange=\"dochangeTariff('tarUsage', this.value)\">\n";
              echo "<option value='0'>- เลือกประเภทย่อย -</option>\n";
              while($tarSubBodyRow = $tarSubBodyResult->fetch_assoc()){
                   echo "<option value='$tarSubBodyRow[TAR_SubBodyName_TH]' >$tarSubBodyRow[TAR_SubBodyName_TH]</option> \n" ;
              }
         }
         else if ($data=='tarUsage') {
              setTariffID($tarPower,$tarBody,$tarSubBody,"");
              $sqlID = "PCS1_016";
              $tarUsageResult = executeSql($conn,$sqlID);
              //setSubDist();
              echo "<select class='form-control' name='tarUsage' id='tarUsage' onChange=\"dochangeTariff('tarVehCodePK', this.value)\">\n";
              echo "<option value='0'>- เลือกการใช้งาน -</option>\n";
              while($tarUsageRow = $tarUsageResult->fetch_assoc()){
                   echo "<option value=\"$tarUsageRow[TAR_UsageName_TH]\" >$tarUsageRow[TAR_UsageName_TH]</option> \n" ;
              }
         }
         else if ($data=='tarVehCodePK'){
              setTariffID($tarPower,$tarBody,$tarSubBody,$tarUsage);
              $sqlID = "PCS1_017";
              $tarVehCodeResult = executeSql($conn,$sqlID);
              $tarVehCodeRow = $tarVehCodeResult->fetch_assoc();
              echo "<input type='text' class='form-control' name='tarVehCodePK' id='tarVehCodePK' value=\"$tarVehCodeRow[TAR_VehCode_PK]\">\n";
              echo "Net Premium<input type='text' class='form-control' name='premStdNet' id='premStdNet' value=\"$tarVehCodeRow[TAR_Prem]\">\n";
              echo "Vat<input type='text' class='form-control' name='premStdVat' id='premStdVat' value=\"$tarVehCodeRow[TAR_Vat]\">\n";
              echo "Stamp Duty<input type='text' class='form-control' name='premStdStampDuty' id='premStdStampDuty' value=\"$tarVehCodeRow[TAR_StampDuty]\">\n";
              echo "Total Premium<input type='text' class='form-control' name='premStdTotal' id='premStdTotal' value=\"$tarVehCodeRow[TAR_TotalPrem]\">\n";
         }
         else{
          echo "</select>\n";
         } 
?>