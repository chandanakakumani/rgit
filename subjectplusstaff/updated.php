<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?><?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$id = $_POST['id'];

$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
    	$courseid = trim(mysql_real_escape_string($_POST["courseid"]));
		$branchid = trim(mysql_real_escape_string($_POST["branchid"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$section = trim(mysql_real_escape_string($_POST["section"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		
$rsUpdate = mysql_query("UPDATE subjectplusstaff
	SET  staffid = '$staffid',  courseid = '$courseid',  branchid = '$branchid',  year = '$year',  semester = '$semester',  section = '$section',  subjectid = '$subjectid'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>



<?php


include('../include/footer.php');


?>