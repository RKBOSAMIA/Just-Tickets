<?php

	echo "alert('Logged out Successfully')";
	
	session_start();
	session_destroy();
	header("Location: login.html");
	?>