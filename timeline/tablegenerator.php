<!-- Codes by HTML.am -->

<!-- CSS Code -->

<html>
<head>
<title> detail view</title>
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component1.css" />
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<center>
<h1>DETAIL VIEW</h1>
</center>
<style type="text/css" scoped>
table.GeneratedTable {
width:80%;
background-color:#FFFFFF;
border-collapse:collapse;border-width:1px;
border-color:#336600;
border-style:solid;
color:#009900;
}

table.GeneratedTable td, table.GeneratedTable th {
border-width:1px;
border-color:#336600;
border-style:solid;
padding:3px;
}

table.GeneratedTable thead {
background-color:#CCFF99;
}

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
top:74px;
  position: absolute;
  /* margin: 0 auto; */
  left: 42%;
  padding: 5px;
  }
</style>

<!-- HTML Code -->
<table align=center class="GeneratedTable">
<thead>
<tr>
<th>PROJECT </th>
<th>DONOR </th>

</tr>
</thead>
<tbody>


<div class="container">
			<header class="clearfix">
				
			</header>
			<span class="header common">
				<span>Happy<span>Hearts</span></span>
			</span>
			<img src="logo.jpg" class="logo_img" />	
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
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

<?php
include 'connect.php';
$query_get="select * from donors,project where project.pid=donors.pid";
$query_exec = mysql_query($query_get) or die(mysql_error());

while($ans = mysql_fetch_assoc($query_exec))
   {
   $pn=$ans['pname'];
   $na=$ans['name'];
   $cp=$ans['contactperson'];
   $currentprogress=$ans['currentprogress'];
   $budget=$ans['budget'];
   $cnumber=$ans['cpmobile'];
	echo '<tr><td>';
	echo $pn;
	echo '<br>';
	
	echo 'budget: '.$budget;
	echo '<br>';
	echo 'contact person: '.$cp;
	echo '<br>';
	echo 'mobile: '.$cnumber;
	echo '<br>';
	echo 'currentprogress: '.$currentprogress.' %';
	
	
echo '</td> <td>';
	echo $na ;
	echo '</td>
	</tr>';
   }


?>
</tbody>
</table>

<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
        <script src="jquery-1.11.3.min.js"></script>

</body>
</html>