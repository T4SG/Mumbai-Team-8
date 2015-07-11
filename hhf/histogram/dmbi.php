<html>
    <head>
    <link href="flot/examples/examples.css" rel="stylesheet" type="text/css">
	
	<script language="javascript" type="text/javascript" src="flot/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="flot/jquery.flot.categories.js"></script>
    
    <style>
	.demo-placeholder{
		  width: 75%;
		  height: 85%;
	}
	#canvas1{
		
  width: 100%;
  height: 100%;
	}
	</style>
    </head>
    <body>
    <?php
        include("db_connect.php");
        
        $pid = $_GET['pid'];
        
        /*if(type_selection.equals("Conditioner"))			
            {
                if(brand_selection.equals("L'Oreal"))
                {
                    p = probability_conditioner_profit * probability_loreal_profit; 
                    Log.i("p",p+"");
                    l = probability_conditioner_loss * probability_loreal_loss;
                    Log.i("l",l+"");
                    pred(p,l);
                }
                
                if(brand_selection.equals("Garnier"))
                {
                    p = probability_conditioner_profit * probability_garnier_profit; 
                    Log.i("p",p+"");
                    l = probability_conditioner_loss * probability_garnier_loss;
                    Log.i("l",l+"");
                    pred(p,l);
                }
            }*/
            
			/*
            $query="Select COUNT(*) from movie where rating='hit'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $hit = $row[0];
            }
            
            $query="Select COUNT(*) from movie where rating='flop'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $flop = $row[0];
            }
            
            $query="Select COUNT(*) from movie where genre='".$genre."' && rating='hit'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $genre_hit = $row[0];
            }
            
            $query="Select COUNT(*) from movie where actor='".$actor."' && rating='hit'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $actor_hit = $row[0];
            }
            
            $query="Select COUNT(*) from movie where actress='".$actress."' && rating='hit'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $actress_hit = $row[0];
            }
            
            $query="Select COUNT(*) from movie where genre='".$genre."' && rating='flop'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $genre_flop = $row[0];
            }
            
            $query="Select COUNT(*) from movie where actor='".$actor."' && rating='flop'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $actor_flop = $row[0];
            }
            
            $query="Select COUNT(*) from movie where actress='".$actress."' && rating='flop'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $actress_flop = $row[0];
            }
            
            $p_genre_hit = $genre_hit/$hit;
            $p_actor_hit = $actor_hit/$hit;
            $p_actress_hit = $actress_hit/$hit;
			$total_hits_of_choice = $genre_hit + $actor_hit + $actress_hit;
            $p_hit = $p_genre_hit * $p_actor_hit * $p_actress_hit;
            
            $p_genre_flop = $genre_flop/$flop;
            $p_actor_flop = $actor_flop/$flop;
            $p_actress_flop = $actress_flop/$flop;
			$total_flops_of_choice = $genre_flop + $actor_flop + $actress_flop;
            $p_flop = $p_genre_flop * $p_actor_flop * $p_actress_flop;
            
            if($p_hit>$p_flop)
            echo '<h1 style="text-align:center">Moive\'s Prediction: Hit</h1><br/><br/>';
            else
            echo '<h1 style="text-align:center">Moive\'s Prediction: Flop</h1><br/><br/>'; */
	?>
    <div id="placeholder" class="demo-placeholder" style="padding: 0px; position: relative;">
        <canvas id="canvas1" class="flot-base" width="818" height="413" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 818px; height: 413px;">
        </canvas>
    <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 49px; text-align: center;">January</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 184px; text-align: center;">February</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 327px; text-align: center;">March</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 468px; text-align: center;">April</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 606px; text-align: center;">May</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 136px; top: 395px; left: 742px; text-align: center;">June</div>
    </div>
    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 382px; left: 8px; text-align: right;">0.0</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 327px; left: 8px; text-align: right;">2.5</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 273px; left: 8px; text-align: right;">5.0</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 218px; left: 8px; text-align: right;">7.5</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 164px; left: 2px; text-align: right;">10.0</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 109px; left: 2px; text-align: right;">12.5</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 55px; left: 2px; text-align: right;">15.0</div>
    <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 2px; text-align: right;">17.5</div>
    </div>
    </div>
    <canvas class="flot-overlay" width="818" height="413" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 818px; height: 413px;"></canvas>
    </div>
    
    
    <?php
			$query="Select COUNT(*) from movie where rating='hit'";
            $res = $con -> query($query) or die("Error:".$query);
            while($row = $res->fetch_array())
            {
                $hit = $row[0];
            }
	?>
    
    <script type="text/javascript">

		$(window).load(function() {

		//$(function() {
			var data = [ ["Hits", <?php echo $hit; ?>], ["Flops", <?php echo $flop; ?>], ["Genre Hit + Actor Hit + Actress Hit", <?php echo $total_hits_of_choice; ?>], [" Genre Flop + Actor Flop + Actress Flop", <?php echo $total_flops_of_choice; ?>], ["Probability-Hit(Scale x1000)", <?php echo $p_hit*1000; ?>], ["Probability-Flop(Scale x1000)", <?php echo $p_flop*1000; ?>] ];
			
			$.plot("#placeholder", [ data ], {
				series: {
					bars: {
						show: true,
						barWidth: 0.6,
						align: "center"
					}
				},
				xaxis: {
					mode: "categories",
					tickLength: 0
				}
			});
	
		});

	</script>
    </body>
</html>