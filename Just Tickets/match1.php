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
<link type="text/css" href="3.css" rel="stylesheet">

<body>

<center><br><br><br><br>
<form action="matchess.php" method="post">

<table border="1">
<center><h3>22nd April 2016 at 8:00pm,Delhi</h3></center><br>
<td class="t1"><img src="rps.jpg"></td>
<td class="t2"><input type="submit" name="match" value="PUNE vs. BANGALORE " class="a" ></td>
<td class="t3"><img src="rcb.png"></td>
<td class="t3">Price:2500Rs.</td>
</table>
<br>
<br>

<table border="1">
<center><h3>23rd April 2016 at 4:00pm,Delhi</h3></center><br>
<td class="t1"><img src="dd.jpg"></td>
<td class="t2"><input type="submit" name="match" value="DELHI vs. MUMBAI" class="a" ></td>
<td class="t3"><img src="mi.png"></td>
<td class="t3">Price:2500Rs.</td>
</table>
<br>
<br>
<table border="1">
<center><h3>23rd April 2016 at 8:00pm,Hyderabad</h3></center><br>
<td class="t1"><img src="srh.jpg"></td>
<td class="t2"><input type="submit" name="match" value="HYDERABAD vs. PUNJAB" class="a" ></td>
<td class="t3"><img src="kxp.JPG"></td>
<td class="t3">Price:2500Rs.</td>
</table>
<br>
<br>

<table border="1">
<center><h3>24th April 2016 at 4:00pm,Rajkot</h3></center><br>
<td class="t1"><img src="gl.jpg"></td>
<td class="t2"><input type="submit" name="match" value="GUJARAT vs. BANGALORE" class="a" ></td>
<td class="t3"><img src="rcb.png"></td>
<td class="t3">Price:5000Rs.</td>
</table>
<br>
<br>

<table border="1">
<center><h3>23rd April 2016 at 8:00pm,Pune</h3></center><br>
<td class="t1"><img src="rps.jpg"></td>
<td class="t2"><input type="submit" name="match" value="PUNE vs. KOLKATA" class="a" ></td>
<td class="t3"><img src="kkr.png"></td>
<td class="t3">Price:2500Rs.</td>
</table>
<br>
<br>
</center>
</body>
</html>
