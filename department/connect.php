<?php

$con=mysql_connect("localhost","root","root");
if(!($con))
{
echo "connection failed";
}


$select=mysql_select_db("rgm_db");

?>