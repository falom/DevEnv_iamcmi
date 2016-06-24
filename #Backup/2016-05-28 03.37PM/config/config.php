<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('config/function.php'); 

$title = "IAMCMI - ";
$homeTitle = $title."Home";
$loginTitle = $title."Login";
$policyCreate = $title."Create New Policy";
$policySearch = $title."Policy Search";
$redbookUpdate = $title."Update Redbook Information";


function connOpen(){
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "TestDB";
	// MySQLi Object-Oriented	
	$conn = new mysqli($hostname, $username, $password, $dbName) or die("Connection failed: " . $conn->connect_error);
	//echo "Opened connection successfully<br>";	
	
	return $conn;
}
function connClose($conn){
	$conn->close();
	//echo "Closed connection successfully<br>";
}
function testEcho(){
	echo "test echo successfully";
}
?>
