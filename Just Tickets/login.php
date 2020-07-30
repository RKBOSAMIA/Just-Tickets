<?php
$database ="first";
$email=$_POST["Email"];
$pass=$_POST["Password"];
$con=mysql_connect("localhost","root","");
$n;
if(!$con)
{
	die(mysql_error());
}
else
{
mysql_select_db("$database",$con) or die(mysql_error());
$query="select * from regtb where Email='$email'";


$result=mysql_query($query) or die(mysql_error());
	if(!$result)
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('incorrect user id or password');\n";
		echo "</script>";
		include('Location: login.html');  
	}
else 
{
	$row=mysql_fetch_row($result);
	if($pass!=$row[5])
	{
	
		  
		echo "<script type='text/javascript'>\n";
		echo "alert('incorrect user id or password');\n";
		echo "</script>";
		include("login.html");
	}
	else
	{
		$n=$row[1];
		session_start();
		
		$_SESSION['sid']=session_id();
		$_SESSION['uid']=$email;
		$_SESSION['n']=$n;
		if(!isset($_SESSION['sid']))
		{
			header("Location:login.html");
		}
		echo "<script type='text/javascript'>\n";
		echo "alert('you are logged in');\n";
		echo "</script>";
		header("Location:homepage.php");
	}
}

} 
mysql_close(); 
?>