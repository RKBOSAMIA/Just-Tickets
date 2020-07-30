<?php
$database="contact";
$name=$_POST["Name"];
$email=$_POST["Email"];
$sub=$_POST["Subject"];
$message=$_POST["Message"];
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die(mysql_error());
}
else
{
	mysql_select_db("$database",$con);
	$query="insert into contb(Name,Email,Subject,Message) values ('$name','$email','$sub','$message')";
	mysql_query($query) or die(mysql_error());
	echo "<script type='text/javascript'>\n";
	echo "alert('Feedback successfully submitted.');\n";
	echo "</script>";
	header("Location:contact.html");
}
mysql_close(); 
?>