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
<center><p class="p1">STAY TUNED . STAY UPDATED .</p></center><br>

<body>

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
<p class="p3">KEEP IN TOUCH</p>



<form action="contact1.php" method="post">
<div class="top1">
<input type="text" name="Name" placeholder="Name" class="a"><br><br><br>
<input type="email" name="Email" placeholder="Email" class="a"><br><br><br>
<input type="text" name="Subject" placeholder="Subject" class="a">
</div>
<div class="top2">
<input type="text" name="Message" placeholder="Message Texts.." class="b"><br><br>
<input type="submit" value="Submit">
</div>
</form>

</body>
</html>
