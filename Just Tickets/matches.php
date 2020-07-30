<?php
$c=$_POST["Count"];
session_start();
$t=$c*$_SESSION['b'];
echo"<script>";
echo "alert($t)";
echo"</script>";
include('matches.html');
?>
