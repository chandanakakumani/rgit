<?php
include('connect.php');
$studentid=$_SESSION['studentid'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
$query=mysql_query("select * from subjectdetails where year='$year' and semester='$semester'");
$num=mysql_num_rows($query);
$result=mysql_fetch_array($query);
for($i=1;$i<$num;$i++)
{
$query.$i=mysql_query("select * from period where subjectname=$result[subjectcode]");
$num.$i=mysql_num_rows($query.$i);
$result.$i=mysql_fetch_array($query.$i);
}

$querymain=mysql_query(select * from dailyattendance where studentid=$studentid  );











?>