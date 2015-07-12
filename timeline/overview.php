<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	
	<title>Responsive Vertical Timeline</title>
    <style>
	.progress{
	  background-color: rgb(245, 245, 255);
	  border-radius: 8px;
	  width: 100%;
	}
	.progress td{
		padding: 4px;
	}
	#fade{
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
}
#light{
    display: none;
    position: absolute;
    top: 30%;
    left: 30%;
    width: 100%;
    height: 200%;
    margin-left: -150px;
    margin-top: -100px;                 
    padding: 10px;
    border: 2px solid #FFF;
    background: #CCC;
    z-index:1002;
    overflow:visible;
}
	</style>
	<script type="text/javascript">
	window.document.onkeydown = function (e)
{
    if (!e){
        e = event;
    }
    if (e.keyCode == 27){
        lightbox_close();
    }
}

function lightbox_open(){
    window.scrollTo(0,0);
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';  
}
function lightbox_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
}
	</script>
	
</head>
<body>
	

	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
            	<table class="progress">
                  <tr>
                    <th>Phases</th>
                    <th>Progress</th>		
                    <th>Images</th>
                  </tr>
                  <tr>
                    <td>Site Preparation</td>
                    <td>100%</td>
                    <td><a href="#" onclick="lightbox_open();">View</a></td>
                  </tr>
                  <tr>
                    <td>Soil Preparation</td>
                    <td>50%</td>
                    <td><a href="#" onclick="lightbox_open();">View</a></td>
                  </tr>
                  <tr>
                    <td>Concrete Bed Layer</td>
                    <td>45%</td>
                    <td><a href="#" onclick="lightbox_open();">View</a></td>
                  </tr>
                  <tr>
                    <td>Brick Walls</td>
                    <td>60%</td>
                    <td><a href="#" onclick="lightbox_open();">View</a></td>
                  </tr>
                </table>
				<div id="light"><img src="img-upload/brickplaced.jpg" style="width: 100%"/></div>
<div id="fade" onClick="lightbox_close();"></div> 
				<!--
                    <h2>Title of section 1</h2>
                    <img src="img/download.jpg">
                    <a href="#0" class="cd-read-more">Read more</a>
                -->
				<span class="cd-date">Jan 14</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1stfloor.jpg" alt="1stfloor" title="1stfloor" id="wows1_0"/></li>
		<li><img src="data1/images/base1.jpg" alt="base1" title="base1" id="wows1_1"/></li>
		<li><img src="data1/images/brickplaced.jpg" alt="brickplaced" title="brickplaced" id="wows1_2"/></li>
		<li><img src="data1/images/built.jpg" alt="built" title="built" id="wows1_3"/></li>
		<li><img src="data1/images/childrenhappy.jpg" alt="childrenhappy" title="childrenhappy" id="wows1_4"/></li>
		<li><img src="data1/images/community.jpg" alt="community" title="community" id="wows1_5"/></li>
		<li><img src="data1/images/gettingall.jpg" alt="gettingall" title="gettingall" id="wows1_6"/></li>
		<li><img src="data1/images/ground.jpg" alt="ground" title="ground" id="wows1_7"/></li>
		<li><img src="data1/images/helping.jpg" alt="helping" title="helping" id="wows1_8"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/house.jpg" alt="carousel jquery" title="house" id="wows1_9"/></a></li>
		<li><img src="data1/images/playground.jpg" alt="playground" title="playground" id="wows1_10"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="1stfloor"><span><img src="data1/tooltips/1stfloor.jpg" alt="1stfloor"/>1</span></a>
		<a href="#" title="base1"><span><img src="data1/tooltips/base1.jpg" alt="base1"/>2</span></a>
		<a href="#" title="brickplaced"><span><img src="data1/tooltips/brickplaced.jpg" alt="brickplaced"/>3</span></a>
		<a href="#" title="built"><span><img src="data1/tooltips/built.jpg" alt="built"/>4</span></a>
		<a href="#" title="childrenhappy"><span><img src="data1/tooltips/childrenhappy.jpg" alt="childrenhappy"/>5</span></a>
		<a href="#" title="community"><span><img src="data1/tooltips/community.jpg" alt="community"/>6</span></a>
		<a href="#" title="gettingall"><span><img src="data1/tooltips/gettingall.jpg" alt="gettingall"/>7</span></a>
		<a href="#" title="ground"><span><img src="data1/tooltips/ground.jpg" alt="ground"/>8</span></a>
		<a href="#" title="helping"><span><img src="data1/tooltips/helping.jpg" alt="helping"/>9</span></a>
		<a href="#" title="house"><span><img src="data1/tooltips/house.jpg" alt="house"/>10</span></a>
		<a href="#" title="playground"><span><img src="data1/tooltips/playground.jpg" alt="playground"/>11</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider bootstrap</a> by WOWSlider.com v8.2</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Title of section 3</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 24</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Title of section 4</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 14</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Title of section 5</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 18</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Final Section</h2>
				<p>This is the content of the last section</p>
				<span class="cd-date">Feb 26</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>