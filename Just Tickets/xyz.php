<?php
$c=$_POST['Count'];
session_start();
$t=$c*$_SESSION['n'];
echo"<script>";
echo "alert($t)";
echo"</script>";
?>
<p>Click <a href="movies.html">here</a> to go back;<p>