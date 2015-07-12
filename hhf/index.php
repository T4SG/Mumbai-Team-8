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
		
		<style>
		a{
			text-decoration: none;
		}
		
.box7{
	display: none;
}
.logo_img{
	height: 60px;
  top: 0px;
  position: absolute;
  right: 16px;
}
.header span{

  float: left;
  
  font-family: 'Exo', sans-serif;
  font-size: 35px;
  font-weight: 200;
color: #5379fa;
}
.header span span {
  color: #000 !important;
}
.common {
height: 100px;
  position: absolute;
  /* margin: 0 auto; */
  left: 42%;
  padding: 5px;
  }
		</style>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a class="gn-icon gn-icon-download" href="index.php">Projects</a>
									
								</li>
								<li><a class="gn-icon gn-icon-illustrator" href="tablegenerator.php">Donor</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
			</ul>
			<span class="header common">
				<span>Hearts<span>Happy</span></span>
			</span>
			<img src="logo.jpg" class="logo_img" />
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
			<a href="Chart/Chart.js-master/samples/pie.html"> <div class="box<?php echo $i;$i++;?>" id="red"> <?php echo $row['pname']; ?>
				</div></a>
				<?php 
					$name="Alert System";
					$email="test@ngo.com";
					$mobile="9892603078";
					$text="NGO X has not been delivering on time. Please look into the same";
					$to = "parth1861994@gmail.com";
					//$to = "enactushrcollege199@gmail.com";
					$subject = "Mail from $name";
					$message ="Message: $text \n\n From:- \n Email id : $email \n Contact Number : $mobile  \r\n";
					$header = "From: NGO Dashboard \r\n";
					$retval = mail ($to,$subject,$message,$header);
					if( $retval == true )  
					{
					   echo "Message sent successfully...";
					   echo "Mail from $name";
					echo "$text \n\n From:- \n Email id : $email \n Contact Number : $mobile  \r\n";
					}
					else
					{
					   echo "Message could not be sent...";
					}
					/*
					if(strpos($_SERVER['HTTP_REFERER'],'?email=success') !== false)
						{
							//echo substr($_SERVER['HTTP_REFERER'],0,strpos($_SERVER['HTTP_REFERER'],'?status=fail')-1);
							//echo $_SERVER['HTTP_REFERER'];
							header('Location: ' .$_SERVER['HTTP_REFERER']);
							
						}
						else
						{
							
							header('Location: ' . $_SERVER['HTTP_REFERER']."?email=success");
						}
					*/
				}?>
			<!--<?php /*else*/ {?>-->
			<a href="Chart/Chart.js-master/samples/pie.html"><div class="box<?php echo $i;$i++;?>" id="green"> <?php echo $row['pname']; ?>
				</div></a>
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