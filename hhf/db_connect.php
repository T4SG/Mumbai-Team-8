<?php
	
		$con = new mysqli("localhost", "root", "", "hhf");
		if(!$con)
			echo "Connection not made"; 
		

		// Check connection
		if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
}
?>