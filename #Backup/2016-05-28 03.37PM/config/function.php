<?php
	function newPolicyNo($polNo){
		$polName_prefix = "TEST";
		$polName_lengthLimit = 10;

		$polNo = trim($polNo,$polName_prefix)+1;
		
		$addZero = $polName_lengthLimit - (strlen($polName_prefix) + strlen($polNo));
		$newPolNo = $polName_prefix;

		while($addZero >= 0){
			$newPolNo = $newPolNo."0";
			$addZero--;
		}

		return $newPolNo.$polNo;
	}
?>