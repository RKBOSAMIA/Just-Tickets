<?php
$database ="matches";
$name=$_POST["match"];
$day=$_POST["day"];

$con=mysql_connect("localhost","root","");

if(!$con)
{
	die(mysql_error());
}
else
{
mysql_select_db("$database",$con) or die(mysql_error());
$query="select * from mattb where Name='$name'";
$result=mysql_query($query) or die(mysql_error());
	if(!$result)
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('incorrect user id or password');\n";
		echo "</script>";
		include('Location: match.html');  
	}
else 
{
	$row=mysql_fetch_row($result);
	$l=$row[2];	
		session_start();
		$_SESSION['b']=$l;
		header('Location:matches.php');

}
} 
mysql_close(); 
?>