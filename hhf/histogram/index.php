<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="get" action="dmbi.php">
  <fieldset>
    <legend style="font-size:40px;">Movie Analysis:</legend>
    <?php
		include("db_connect.php");
		
	?>
    

        
    <select name="genre">
    	<?php
		
			$query="Select DISTINCT(genre) from movie";
			$res = $con -> query($query) or die("Error:".$query);
			while($row = $res->fetch_array())
			{
				$genre_db = $row[0];
				echo "<option value='".$genre_db."' >".$genre_db."</option>";
        	}
		?>
    </select><br/><br/>
    <select name="actor">
    	<?php
		
			$query="Select DISTINCT(actor) from movie";
			$res = $con -> query($query) or die("Error:".$query);
			while($row = $res->fetch_array())
			{
				$actor_db = $row[0];
				echo "<option value='".$actor_db."' >".$actor_db."</option>";
        	}
		?>
    </select><br/><br/>
    <select name="actress">
    	<?php
		
			$query="Select DISTINCT(actress) from movie";
			$res = $con -> query($query) or die("Error:".$query);
			while($row = $res->fetch_array())
			{
				$actress_db = $row[0];
				echo "<option value='".$actress_db."' >".$actress_db."</option>";
        	}
		?>
    </select><br/><br/>
    
    <input type="submit" value="Predict" /><br/>
  </fieldset>
</form>
</body>
</html>