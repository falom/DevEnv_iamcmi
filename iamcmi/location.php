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
    $provID = $_GET['provID'];
    $distID = $_GET['distID'];
    $subDistID = $_GET['subDistID'];
    
         if ($data=='addrProv') { 
              $sqlID  = "PCS1_002";   
              $addrProvResult =executeSql($conn,$sqlID);
              $addrProvSize = $addrProvResult->num_rows;
              echo "<select class='form-control' name='addrProv' id='addrProv' onChange=\"dochangeLocation('addrDist', this.value)\">\n";
              echo "<option value='0'>- เลือกจังหวัด -</option>\n";
              while($addrProvRow = $addrProvResult->fetch_assoc()){
                if($provID==$addrProvRow["PROVINCE_ID"]){
                   echo "<option value='$addrProvRow[PROVINCE_ID]' selected='selected'>$addrProvRow[PROVINCE_NAME]</option>" ;
                }
                else{
                   echo "<option value='$addrProvRow[PROVINCE_ID]' >$addrProvRow[PROVINCE_NAME]</option>" ;
                }   
              }
         } else if ($data=='addrDist') {
              setLocationID($provID,0,0);
              $sqlID  = "PCS1_010";   
              $addrDistResult =executeSql($conn,$sqlID);
              $addrDistSize = $addrDistResult->num_rows;
              $distID = $_GET['distID'];
              echo "<select class='form-control' name='addrDist' id='addrDist' onChange=\"dochangeLocation('addrSubDist', this.value)\">\n";
              echo "<option value='0'>- เลือกอำเภอ -</option>\n";
              while($addrDistRow = $addrDistResult->fetch_assoc()){
                 if($distID==$addrDistRow["DISTRICT_ID"]){
                   echo "<option value='$addrDistRow[DISTRICT_ID]' selected='selected'>$addrDistRow[DISTRICT_NAME]</option>" ;
                }
                else{
                   echo "<option value='$addrDistRow[DISTRICT_ID]' >$addrDistRow[DISTRICT_NAME]</option>" ;
                }   
              }
         } else if ($data=='addrSubDist') {
              setLocationID($provID,$distID,0);
              $sqlID  = "PCS1_011";   
              $addrSubDistResult  =executeSql($conn,$sqlID);
              echo "<select class='form-control' name='addrSubDist' id='addrSubDist' onChange=\"dochangeLocation('addrZipCode', this.value)\">\n";
              echo "<option value='0'>- เลือกตำบล -</option>\n";
              $subDistID = $_GET['subDistID'];
              while($addrSubDistRow = $addrSubDistResult->fetch_assoc()){
                 if($subDistID==$addrSubDistRow["SUBDISTRICT_CODE"]){
                   echo "<option value='$addrSubDistRow[SUBDISTRICT_CODE]' selected='selected'>$addrSubDistRow[SUBDISTRICT_NAME]</option> \n" ;
                }
                else{
                   echo "<option value='$addrSubDistRow[SUBDISTRICT_CODE]' >$addrSubDistRow[SUBDISTRICT_NAME]</option> \n" ;
                }   
              }
         }
         else if ($data=='addrZipCode') {
              setLocationID($provID,$distID,$subDistID);
              $sqlID  = "PCS1_012";   
              $addrZipCodeResult  =executeSql($conn,$sqlID);
              //setSubDist();
              echo "<select class='form-control' name='addrZipCode' id='addrZipCode'>\n";
              while($addrZipCodeRow = $addrZipCodeResult->fetch_assoc()){
                if($val != '-1'){
                 echo "<option value=\"$addrZipCodeRow[zipcode]\" selected='selected'>$addrZipCodeRow[zipcode]</option> \n" ;
                }
                else{
                   echo "<option value=\"$addrZipCodeRow[zipcode]\" >$addrZipCodeRow[zipcode]</option> \n" ;
                }   
              }
         }
         else{
          echo "</select>\n";
         } 
?>