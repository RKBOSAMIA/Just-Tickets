<?php
$database ="movies";
$name=$_POST["movie"];
session_start();
$_SESSION['day']=$_POST["day"];

$con=mysql_connect("localhost","root","");

if(!$con)
{
	die(mysql_error());
}
else
{
mysql_select_db("$database",$con) or die(mysql_error());
$query="select * from movtb where Name='$name'";
$result=mysql_query($query) or die(mysql_error());
	if(!$result)
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('incorrect user id or password');\n";
		echo "</script>";
		include('Location: movie.php');  
	}
else 
{
	$row=mysql_fetch_row($result);
	$l=$row[2];	
		session_start();
		$_SESSION['b']=$l;
		header('Location:movies.php');

}
} 
mysql_close(); 
?>