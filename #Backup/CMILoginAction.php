<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link rel="stylesheet" href="config/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="config/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="config/bootstrap/css/iamStyle.css">
<script src="config/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function checkLogin(){
		var user = document.getElementById('user').value;
		alert(user);
		if(user == ''){
			alert("Please Enter UserName");
			document.getElementById('user').focus();
			return false;
		}else{
			alert("In Else");
			return true;
		}
	}
	
</script>

<title>Create CMI</title>
<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
</head>
<body>
	<form id="cmi" action="CMILoginAction.php"  method="post">
		<div class="container">
	    	<div class="bodylg"></div>
			<div class="gradlg"></div>
			<div class="headerlg">
				<div>iam<span>CMI</span></div>
			</div>
			<br>
			<div class="loginlg">
					<input type="text" placeholder="username" name="user" id="user"><br>
					<input type="password" placeholder="password" name="password" id="pass"><br>
					<input type="submit" value="Login" onclick="return checkLogin();">
			</div> 
		</div>
	</form>
	</body>
</html>