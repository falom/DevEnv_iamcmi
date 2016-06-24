
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>CMI</title>
</head>
<body>
	<form action="post" id="cmi">
		<div class="container">
			<div class="page-header">
				<h1>พ ร บ.</h1>
			</div>

			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Vehicle Information</a></li>
				<li><a href="cover.jsp">Cover Details</a></li>
				<li><a href="quoteBound.jsp">Quote Bound</a></li>
			</ul>
			<div class="row">
				<div class="col-md-2">
					<b>Vehicle Information</b>
				</div>
			</div>
			<tr>
				<td align="right">Make</td>
				<td align="left"><select name="sMake" id="sMake"
					style="width: 120px;">
						<option>Please Select</option>
						<option value="toyota">Toyota</option>
						<option value="honda">Honda</option>
						<option value="mazda">Mazda</option>
				</select></td>
				<td align="right">Model</td>
				<td align="left"><select name="sModel" id="sModel"
					style="width: 200px;">
						<option>Please Select</option>
						<option value="altis">Altis</option>
						<option value="civic">Civic</option>
						<option value="cx5">Cx5</option>
				</select></td>
			</tr>
			<tr>
				<td align="right">Year of Manufacture</td>
				<td align="left"><select name="sMnft" id="sMnft">
						<option>Please Select</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
				</select></td>
				<td align="right">Body Type</td>
				<td align="left"><select name="sModel" id="sModel">
						<option>Please Select</option>
						<option value="altis">Altis</option>
						<option value="civic">Civic</option>
						<option value="cx5">Cx5</option>
				</select></td>
			</tr>
			<tr>
				<td align="right">Year of Manufacture</td>
				<td align="left"><select name="sMnft" id="sMnft">
						<option>Please Select</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
				</select></td>
				<td align="right">Body Type</td>
				<td align="left"><select name="sBody" id="sBody">
						<option>Please Select</option>
						<option value="1">Sedan</option>
						<option value="2">Truck</option>
						<option value="3">Van</option>
				</select></td>
			</tr>
			<tr>
				<td align="right">Sub Body Type</td>
				<td align="left"><select name="sSubBody" id="sSubBody">
						<option>Please Select</option>
						<option value="1">Sub Body Type</option>
						<option value="2">Sub Body Type</option>
						<option value="3">Sub Body Type</option>
				</select></td>
				<td align="right">Usage</td>
				<td align="left"><select name="sUsage" id="sUsage">
						<option>Please Select</option>
						<option value="1">private</option>
						<option value="2">public</option>
						<option value="3">commercial</option>
				</select></td>
			</tr>
			</table>
			</fieldset>
		</div>
	</form>
</html>