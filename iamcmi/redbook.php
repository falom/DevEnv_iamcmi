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
    $redMake = trim($_GET['redMake']);
    $redModel = trim($_GET['redModel']);
    $redYear = trim($_GET['redYear']);
    $redDesc = trim($_GET['redDesc']);

         if ($data=='redMake') { 
              setRedbookID($redMake,"","","");
              $sqlID = "PCS1_006";
              $redMakeResult = executeSql($conn,$sqlID);
              
              echo "<select class='form-control' name='redMake' id='redMake' onChange=\"dochangeRedbook('redModel', this.value)\">\n";
              echo "<option value='0'>- เลือกยี่ห้อ -</option>\n";
              while($redMakeRow = $redMakeResult->fetch_assoc()){
                if($val==$redMakeRow["RED_Make"])  {
                  echo "<option value='$redMakeRow[RED_Make]'  selected='selected' >$redMakeRow[RED_Make]</option>" ;
                }
                else{
                  echo "<option value='$redMakeRow[RED_Make]' >$redMakeRow[RED_Make]</option>" ;
                }  
              }
         } else if ($data=='redModel') {
              setRedbookID($redMake,$redModel,"","");
              $sqlID = "PCS1_007";
              $redModelResult = executeSql($conn,$sqlID);
              $redModel = trim($_GET['redModel']);
              echo "<select class='form-control' name='redModel' id='redModel' onChange=\"dochangeRedbook('redYear', this.value)\">\n";
              echo "<option value='0'>- เลือกรุ่น -</option>\n";
              while($redModelRow = $redModelResult->fetch_assoc()){
                if($redModel==$redModelRow["RED_Model"])  {
                   echo "<option value='$redModelRow[RED_Model]' selected='selected'  >$redModelRow[RED_Model]</option>" ;
                }
                else{
                  echo "<option value='$redModelRow[RED_Model]' >$redModelRow[RED_Model]</option>" ;
                }   
              }
         } else if ($data=='redYear') {
              setRedbookID($redMake,$redModel,$redYear,"");
              $sqlID = "PCS1_008";
              $redYearResult = executeSql($conn,$sqlID);
              $redYear = trim($_GET['redYear']);
              echo "<select class='form-control' name='redYear' id='redYear' onChange=\"dochangeRedbook('redDesc', this.value)\">\n";
              echo "<option value='0'>- เลือกปี -</option>\n";
              while($redYearRow = $redYearResult->fetch_assoc()){
                  if($redYear==$redYearRow["RED_Year"])  {
                   echo "<option value='$redYearRow[RED_Year]' selected='selected'>$redYearRow[RED_Year]</option> \n" ;
                }
                else{
                 echo "<option value='$redYearRow[RED_Year]' >$redYearRow[RED_Year]</option> \n" ;
                } 
              }
         }
         else if ($data=='redDesc') {
              setRedbookID($redMake,$redModel,$redYear,$redDesc);
              $sqlID = "PCS1_009";
              $redDescResult = executeSql($conn,$sqlID);
              $redDesc = trim($_GET['redDesc']);
              echo "<select class='form-control' name='redDesc' id='redDesc' onChange=\"dochangeRedbook('redKey', this.value)\">\n";
              echo "<option value='0'>- เลือกรุ่นย่อย -</option>\n";
              while($redDescRow = $redDescResult->fetch_assoc()){
                 if(trim($redDesc)==trim($redDescRow["RED_Desc"]))  {
                    echo "<option value=\"$redDescRow[RED_Desc]\" selected='selected'>$redDescRow[RED_Desc]</option> \n" ;
                }
                else{
                  echo "<option value=\"$redDescRow[RED_Desc]\" >$redDescRow[RED_Desc]</option> \n" ;
                } 
                  
              }
         }
         else if ($data=='redKey') {
              setRedbookID($redMake,$redModel,$redYear,$redDesc);
              $sqlID = "PCS1_019";
              $redKeyResult = executeSql($conn,$sqlID);
              $redKeyRow = $redKeyResult->fetch_assoc();
              echo "<input type='text' class='form-control' name='redKey' id='redKey' value=\"$redKeyRow[RED_Key]\">\n";
              echo "<div class='col-md-2' align='right'><a href='#'>+Add+</a></div>";
         }
         else{
          echo "</select>\n";
         } 
?>