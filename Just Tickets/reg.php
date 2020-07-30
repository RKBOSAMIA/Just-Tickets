<?php
$database ="first";
$name=$_POST["Name"];
$email=$_POST["Email"];
$smail=$_POST["Smail"];
$contact=$_POST["Contact"];
$pass=$_POST["Password"];
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die(mysql_error());
}
else
{
	mysql_select_db("$database",$con);
	$query="insert into regtb(Name,Email,Contact,Password,Smail) values ('$name','$email','$contact','$pass','$smail')";
	mysql_query($query) or die(mysql_error());
	echo "<script type='text/javascript'>";
	echo "alert('You are successfully registered...')";
	echo "</script>";
	header("Location:login.html");

} 
	
mysql_close(); 
?>
