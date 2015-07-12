<?php
	
		$con = new mysqli("localhost", "root", "", "dmbi_movie");
		if(!$con)
			echo "Connection not made"; 
		

		// Check connection
		if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
}
?>