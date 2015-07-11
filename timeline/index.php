<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Vertical Timeline</title>
		<meta name="description" content="Blueprint: Vertical Timeline" />
		<meta name="keywords" content="timeline, vertical, layout, style, component, web development, template, responsive" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				
			</header>
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
							<?php
						
							include 'connect.php';
							$query_project= "select pname from project";
							$query_exec = mysql_query($query_project) or die(mysql_error());
							
							while($ans = mysql_fetch_assoc($query_exec))
							{
							
								$pname=$ans['pname'];
							
								echo '<li >'.$pname.'</li>';
								
							
							}
							?>
						
							
								
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="overview.php">Overview</a></li>
			</ul>	
			<div class="main">
				<ul class="cbp_tmtimeline">
			
					<?php
include 'connect.php';
$pid=1;
$query_miniupdate="select image,timestamp,description from quickupdate where pid='".$pid."'";
$query_exec = mysql_query($query_miniupdate) or die(mysql_error());
$rows = mysql_num_rows($query_exec);


						

while($ans = mysql_fetch_assoc($query_exec))
   {
   echo '<li>';
   $timestamp=$ans['timestamp'];
	 $image=$ans['image'];
	 
	 $description=$ans['description'];
						echo '<div class="cbp_tmlabel"><h2>';
							echo $timestamp;
							echo '</h2>;
							<img src="';
							echo $image.".jpg";
							echo '" style="width:70%"/> <p>';
							echo $description;
							echo '</p></div></li>';
					}
?>

									</ul>
			</div>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>