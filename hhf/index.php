<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Google Nexus Website Menu</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
			</ul>
			<!--<div class = "box1">
			</div>
			<div class = "box2">
			</div>
			<div class = "box3">
			</div>
			<div class = "box4">
			</div>
			<div class = "box5">
			</div>
			<div class = "box5">
			</div>
			-->
		<?php
		$con = mysqli_connect("localhost","root","","hhf");
		$query = "select * from project"; 
		$query1 = "select * from monthupdate";
		$query = mysqli_query($con,$query);
		$i = 1;
		while($row = mysqli_fetch_assoc($query)){
			$start = $row['startdate'];
			$end = $row['enddate'];
			$startTimestamp = strtotime($start);
			$endTimestamp = strtotime($end);
			$currentTimestamp = $query1['monthupdate'];

			$expectedPercent = (($currentTimestamp - $startTimestamp)/($endTimestamp - $startTimestamp) * 100);

			$currentPercent = $row['currentprogress'];

			if($currentPercent < $expectedPercent) {?>
			<div class="box<?php echo $i;$i++;?>" id="red">
				</div>
				<?php } ?>
			<!--<?php /*else*/ {?>-->
			<div class="box<?php echo $i;$i++;?>" id="green">
				</div>
			<!--<?php } ?>-->

        <?php } ?>	
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>