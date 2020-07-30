<html>
<p class="p1">
<?php 
session_start();
if($_SESSION['sid']==session_id())
{
	echo $_SESSION['n'];
}
else
{
	header("Location:login.html");
}
?>
</p>

<title>Homepage</title>
<link type="text/css" href="2.css" rel="stylesheet">
</head>
<br>
<br>

<center><img src="07.png"><p>J U S T T I C K E T S</p></center>
<center><p class="p1">STAY TUNED . STAY UPDATED .</p></center>



<body class="header">

<td>
<form action="homepage.php">
<button class="button">Home</button>
</form>
<form action="contact.php">
<button class="button">Contact Us</button>
</form>
<form action="about.php">
<button class="button">About Us</button>
</form>
<form action="logout.php">
<button class="button">Log Out</button>
</form>
</td>
<br>

<p class="p2">SELECT A CATEGORY:-----------------------------------------------------------------------------------------------------------------------------</p>

<table border="3">
<tr>
<form action="movie.php"><th><button class="b1">MOVIES</button></th></form> 
</tr>
<tr>
<form action="match1.php"><th><button class="b1">MATCHES</button></th></form>
</tr>
</table>

</html>
