<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$id = $_POST['id'];

$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		$date = trim(mysql_real_escape_string($_POST["date"]));
		$period = trim(mysql_real_escape_string($_POST["period"]));
		
$rsUpdate = mysql_query("UPDATE dailyattendance
	SET  studentid = '$studentid',  subjectid = '$subjectid',  date = '$date',  period = '$period'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>
