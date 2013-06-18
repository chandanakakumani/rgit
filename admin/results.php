<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');
?>




<html>
<head>
<title>Results - Admin </title>
</head>
<body>
<h1>Display Results here...</h1>

<select> 
 <option value="volvo">AB101</option>
  <option value="saab">AB102</option>
  <option value="mercedes">AB103</option>
  <option value="audi">AB104</option>

</select>
<input type="button" value="Apply Filter"/>
<br><br>
<table width="80%" border="1">
	<tr>
		<td>Student ID</td>
		<td>Subject Code</td>		
		<td>Internal</td>
		<td>External</td>				
		<td>Credits</td>	
		<td colspan="3">Result</td>
		

	</tr>
	<tr>
		<td>Student Name</td>
		<td>Subject Code</td>		
		<td><input type="text"/></td>
		<td><input type="text"/></td>
		<td><input type="text"/></td>	
		<td>
<select> 
 <option value="volvo">PASS</option>
  <option value="saab">FAIL</option>
  <option value="mercedes">Detained</option>
  <option value="audi">NA</option>

</select>		
		</td>

		<td><input type="button" value="Save"/></td>
		<td><input type="button" value="Reset" /></td>	
	</tr>

</table>
</body>
</html>