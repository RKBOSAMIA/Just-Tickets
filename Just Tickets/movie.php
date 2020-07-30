<html>
<link type="text/css" href="3.css" rel="stylesheet">
<p class="p1">
<?php 
session_start();
if($_SESSION['sid']==session_id())
{
	
}
else
{
	header("Location:login.html");
}
?>
</p>

<body>

<center><br><br><br><br>
<form action="select.php" method="post">
<p>Select Date:</p><br>
<input type="date" value ="date" name="day"><br><br><br>
<table border="1">
<td class="t1"><img src="fan.jpg" height="70px" width="100px"></td>
<td class="t2"><input type="submit" name="movie" value="FAN" class="a" ></td>
<td class="t3">Price:160Rs.</td>
<td><select>
<option>10:00 a.m.</option>
<option>12:34 p.m.</option>
<option>1:50 p.m.</option>
<option>3:34 p.m.</option>
<option>7:00 p.m.</option>
<option>10:30 p.m.</option>
</td>
<td class="t1"><a href="frev.html"><img src="rating.png"></a></td>
</table>
<br>
<br>

<table border="1">

<td class="t1"><img src="azhar.jpg" height="70px" width="100px"></td>
<td class="t2"><input type="submit" name="movie" value="AZHAR" class="a"></td>
<td class="t3">Price:180Rs.</td>
<td><select>
<option>9:00 a.m.</option>
<option>11:14 p.m.</option>
<option>1:00 p.m.</option>
<option>3:50 p.m.</option>
<option>10:00 p.m.</option>
</td>
<td class="t1"><a href="arev.html"><img src="rating.png"></a></td>
</table>
<br>
<br>
<table border="1">
<td class="t1"><img src="cw.jpg" height="70px" width="100px"></td>
<td class="t2"><input type="submit" name="movie" value="CIVIL WAR" class="a"></td>
<td class="t3">Price:200Rs.</td>
<td><select>
<option>4:00 p.m.</option>
<option>6:30 p.m.</option>
<option>11:30p.m.</option>

</td>
<td class="t1"><a href="cwrev.html"><img src="rating.png"></a></td>
</table>
<br>
<br>

<table border="1">
<td class="t1"><img src="doj.jpg" height="70px" width="100px"></td>
<td class="t2"><input type="submit" name="movie" value="DAWN OF JUSTICE" class="a"></td>
<td class="t3">Price:180Rs.</td>
<td><select>
<option>10:00 a.m.</option>
<option>12:34 p.m.</option>
</td>
<td class="t1"><a href="sbrev.html"><img src="rating.png"></a></td>
</table>
<br>
<br>

<table border="1">
<td class="t1"><img src="RH.jpg" height="70px" width="100px"></td>
<td class="t2"><input type="submit" name="movie" value="ROCKY HANDSOME" class="a"></td>
<td class="t3">Price:80Rs.</td>
<td><select>
<option>10:00 a.m.</option>
<option>12:00 p.m.</option>
<option>4:40 p.m.</option>
</td>
<td class="t1"><a href="rhrev.html"><img src="rating.png"></a></td>
</table>
<br>
<br>
</center>
</body>
</html>
