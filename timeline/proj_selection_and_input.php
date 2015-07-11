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
		</style>
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
                <h>Description</h> <textarea name="text" cols=20 rows=3></textarea>
                <br>
                <h>Images</h> 
                <br>
                <h>Need more capital?</h>
                <br>
                <ul>
                <li><button type="button">Yes</button></li>
                <li><button type = "button">No</button></li>
                </ul>
                <br>
                <input type="Submit"/>
            </div>
            <div class="detailedProgress">
                <table>
                  <tr>
                    <th>Phases</th>
                    <th>Percentage Completed</th>		
                    <th>Comments/Issues</th>
                    <th>Images</th>
                  </tr>
                  <tr>
                    <td>Site Preparation</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Soil Preparation</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Concrete Bed Layer</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Brick Walls</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Finishes Walls</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Finishes Ceilings</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Finishes Floors</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                 </tr>
                  <tr>
                    <td>Doors-Carpentry</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                 <tr>
                  <tr>
                    <td>Finishes-Windows</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                 </tr>
                  <tr>
                    <td>Locksmith Work</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                 <tr>
                  <tr>
                    <td>Glass for Windows</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Internal Painting</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Electric work</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Electric Appliances</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Sink and Water Plumbing</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>External Walls Painting</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  <tr>
                  <tr>
                    <td>Plaque Install</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  </tr>
                  <tr>
                    <td>Soil Preparation</td>
                    <td><input = "text" name = "Percentage Completed"></td>
                    <td><textarea name= "Comment" cols="20" rows="3"></textarea></td>
                  <tr>
                </table>
                <br>
                <br>
                <center>
                <input type="Submit"/>
                </center>
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
