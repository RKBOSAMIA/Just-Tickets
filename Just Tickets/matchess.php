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
<script>
function ff()
{
	window.alert("Successfully Paid");
}
</script>
<link type="text/css" href="3.css" rel="stylesheet">
<body>
<div>
<form action="matches.php" method="post">
<input type="number" required name="Count" placeholder="Number of Tickets"><br><br>
<input type="submit" value="Confirm" class="b"><br><br>
</form>

<input type="text" required placeholder="Credit Card No."><br><br>
<button onclick="ff();">Pay</button><br><br>
<form action="homepage.php">
<input type="submit" value="Go To HomePage" class="b"><br><br>
</div>
</body>
</html>
