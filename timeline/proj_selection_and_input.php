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
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
		<script src="js/modernizr.custom.js"></script>
        <style>
		.contentContainer{
			text-align: center;
		}
		.quickUpdate{
			display:none;
		}
		.detailedProgress{
			display:none;
		}
		.detailedProgress table{
			margin:auto;
		}
		#back{
			display:none;
		}
		.logo_img{
	height: 60px;
  top: 0px;
  position: absolute;
  right: 16px;
  z-index:10;
}
.header span{
  float: left;
  font-family: 'Exo', sans-serif;
  font-size: 35px;
  font-weight: 200;
  color: #5379fa;
  position: absolute;
  top: -67px;
  z-index: 10;
}
.header span span {
   color: #F4ECEC !important;
  top: 0px;
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
			<header class="clearfix">
				
			</header>
			<span class="header common">
				<span>Happy<span>Hearts</span></span>
			</span>
			<img src="logo.jpg" class="logo_img" />	
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger" style="top: 0px;">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>ABC</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">PQR</a>
								</li>
								<li><a class="gn-icon gn-icon-cog">BCD</a></li>
								<li><a class="gn-icon gn-icon-help">DEF</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">XYZ</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- <li><a href="overview.php">Overview</a></li> -->
			</ul>	
		</div>
        <div class="contentContainer">
            <div class="option">
            	<input type="button" id="back" value="Back">
                <input type="button" id="show_detailProgress" value="Update Progress" />
                <input type="button" id="show_quickUpdate" value="Say Hi" />
            </div>
            <div class="quickUpdate">
                <h>Description</h> <textarea name="text" cols=20 rows=3 style="margin-top: 32px"></textarea>
                 
                <br><br>
                <h>Need more capital?</h><input type="radio" name="needCapital"/>Yes
				<input type ="radio" name="needCapital">No</button>
                <br><br>
                <input type="Submit"/>
            </div>
            <div class="detailedProgress">
                <form action="process.php" method="POST">
                  <table>
                  <tr>
                    <th>Phases</th>
                    <th>Percentage Completed</th>		
                    <th>Comments/Issues</th>
                    <!--<th>Images</th>-->
                  </tr>

                  <tr>
                    <td>Site Preparation</td>
                    <td><input = "text" name = "PercentageCompleted1"></td>
                    <td><textarea name= "Comment1" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Soil Preparation</td>
                    <td><input = "text" name = "PercentageCompleted2"></td>
                    <td><textarea name= "Comment2" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Concrete Bed Layer</td>
                    <td><input = "text" name = "PercentageCompleted3"></td>
                    <td><textarea name= "Comment3" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Brick Walls</td>
                    <td><input = "text" name = "PercentageCompleted4"></td>
                    <td><textarea name= "Comment4" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Finishes Walls</td>
                    <td><input = "text" name = "PercentageCompleted5"></td>
                    <td><textarea name= "Comment5" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Finishes Ceilings</td>
                    <td><input = "text" name = "PercentageCompleted6"></td>
                    <td><textarea name= "Comment6" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Finishes Floors</td>
                    <td><input = "text" name = "PercentageCompleted7"></td>
                    <td><textarea name= "Comment7" cols="20" rows="3"></textarea></td>
                 </tr>
                  <tr>
                    <td>Doors-Carpentry</td>
                    <td><input = "text" name = "PercentageCompleted8"></td>
                    <td><textarea name= "Comment8" cols="20" rows="3"></textarea></td>
                 <tr>
                  <tr>
                    <td>Finishes-Windows</td>
                    <td><input = "text" name = "PercentageCompleted9"></td>
                    <td><textarea name= "Comment9" cols="20" rows="3"></textarea></td>
                 </tr>
                  <tr>
                    <td>Locksmith Work</td>
                    <td><input = "text" name = "PercentageCompleted10"></td>
                    <td><textarea name= "Comment10" cols="20" rows="3"></textarea></td>
                 <tr>
                  <tr>
                    <td>Glass for Windows</td>
                    <td><input = "text" name = "PercentageCompleted11"></td>
                    <td><textarea name= "Comment11" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Internal Painting</td>
                    <td><input = "text" name = "PercentageCompleted12"></td>
                    <td><textarea name= "Comment12" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Electric work</td>
                    <td><input = "text" name = "PercentageCompleted13"></td>
                    <td><textarea name= "Comment13" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Electric Appliances</td>
                    <td><input = "text" name = "PercentageCompleted14"></td>
                    <td><textarea name= "Comment14" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Sink and Water Plumbing</td>
                    <td><input = "text" name = "PercentageCompleted15"></td>
                    <td><textarea name= "Comment15" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>External Walls Painting</td>
                    <td><input = "text" name = "PercentageCompleted16"></td>
                    <td><textarea name= "Comment16" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Plaque Install</td>
                    <td><input = "text" name = "PercentageCompleted17"></td>
                    <td><textarea name= "Comment17" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Soil Preparation</td>
                    <td><input = "text" name = "PercentageCompleted18"></td>
                    <td><textarea name= "Comment18" cols="20" rows="3"></textarea></td>
                  <tr>
                 
                </table>
                <br>
                <br>
                <center>
                <input type="Submit" value="Submit"/>
                </center>
                 </form>
            </div>
        </div>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
        <script src="jquery-1.11.3.min.js"></script>	
        <script>
			$("#show_detailProgress").click(function(){
				$(".detailedProgress").show();
				$("#show_quickUpdate").hide();
				$("#show_detailProgress").hide();
				$("#back").show();
			});
			$("#show_quickUpdate").click(function(){
				$(".quickUpdate").show();
				$(".detailedProgress").hide();
				$("#show_detailProgress").hide();
				$("#show_quickUpdate").hide();
				$("#back").show();
			});
			$("#back").click(function(){
				$(".quickUpdate").hide();
				$(".detailedProgress").hide();
				$("#show_detailProgress").show();
				$("#show_quickUpdate").show();
				$("#back").hide();
			});
		</script>
	</body>
</html>


