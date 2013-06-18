<?php
$studentid=$_SESSION['studentid'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
include('connect.php');
$result=mysql_query("select * from dailyattendance where studentid='$studentid' and date in('$fromdate','$todate')");
$data=mysql_fetch_array($result);
$num=mysql_num_rows($result);
?>
<table border='1'>
<tr>
	<td>studentid
	<td>date
	<td>period1
	<td>period2
	<td>period3
	<td>period4
	<td>period5
	<td>period6
	<td>period7
</tr>

	<?php
while($num>0)
{
echo "<tr>";

	echo "<td>" . $data['studentid'];
		  echo "<td>" . $data['date'];
		  echo "<td>" . $data['p1'];
			echo "<td>" . $data['p2'];
			echo "<td>" . $data['p3'];
			echo "<td>" . $data['p4'];
			echo "<td>" . $data['p5'];
			echo "<td>" . $data['p6'];
			echo "<td>" . $data['p7'];
echo "</tr>";

			?>

</table>