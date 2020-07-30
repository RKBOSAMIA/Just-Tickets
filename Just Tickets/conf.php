<?php
$database ="first";
$smail=$_POST["Smail"];

$cp=$_POST["Cp"];
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die(mysql_error());
}
else
{
	mysql_select_db("$database",$con);
	$query="update regtb set Password='$cp' where Smail='$smail'";
	mysql_query($query) or die(mysql_error());
	echo "<script type='text/javascript'>";
	echo "alert('Password Successfully Changed')";
	echo "</script>";
	include("login.html");


} 
	
mysql_close(); 
?>
