<?php 
  
	// Starting clock time in seconds 
	$start_time = microtime(true); 
	$a=1;
		
	// Start loop 
	for($i = 1; $i <=1000; $i++) 
	{ 
			$a++; 
	}  
	// End clock time in seconds 
	$end_time = microtime(true); 
		
	// Calculate script execution time 
	$execution_time = ($end_time - $start_time); 
		
	//echo "Run-time of script: ".$execution_time." secs"; 
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Janji Solver</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content="Rubik’s Cube">
		<meta name="keywords" content="Erno Rubik’s Cube">
		<link rel="stylesheet" type="text/css" href="../styles/cube-style.css">
		<!-- <link rel="stylesheet" type="text/css" href="../styles/cube.css"> -->
		<link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../styles/cardinal.css">
		<link rel="stylesheet" type="text/css" href="../styles/styles.css">
		<link rel="icon" type="image/png" href="../media/cuber-favicon-0064x0064.png">
		<link rel="apple-touch-icon" href="../media/cuber-favicon-0144x0144.png">
		<style>
			html, body, #container{
				margin: 0px;
				padding: 0px;
				width: 100%;
				height: 100%;
			}

			#container{
				background: #fff;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<!-- virtual cube -->
				<div class="col-lg-8">
					<!-- <div id='container' style="height: 100vh;"></div> -->
					<!-- <ul id="controls">
				    <li><a href="#shuffle" id="button-shuffle">Shuffle</a></li>
				    <li><a href="#solve" id="button-solve">Solve</a></li>
				    <li><a href="#undo" id="button-undo">Undo</a></li>
				    <li><a href="#reset" id="button-reset">Reset</a></li>
				    <li>
				      <label>Size</label>
				      <select id="select-size">
				        <option value="3">3x3</option>
				        <option value="4">4x4</option>
				        <option value="5">5x5</option>
				      </select>
				    </li>
				  </ul>
				   --><div id='scene' style="height: 100vh;"></div>
				</div>
				<div class="col-lg-4">
					<center>
						<h1 class="header"><br><img src="../media/janjilogo.png" width="150px" height="60"></h1>
							<!-- navigation bar -->
							<div id="page links">	
								<div class="dropdown">
						            <button class="dropbtn"><a href="../index.html" target="_blank">HOME</a></button>
						        </div>

						        <div class="dropdown">
						            <button class="dropbtn"><a href="#">MODES</a></button>
						              <div class="dropdown-content">
						                <a href="solver.php" target="_blank">Janji Solver</a>
						                <a href="learn.php" target="_blank">Learn to solve</a>
						                <a href="free.php" target="_blank">Free solve</a>
						              </div>
						        </div>

						        <div class="dropdown">
					            <button class="dropbtn"><a href="../algorithms/algorithms.php" target="_blank">ALGORITHMS</a></button>
					              <div class="dropdown-content">
					                <a href="../algorithms/algorithms.php" target="_blank">Algorithm Page</a>
					                <a href="../algorithms/notations.php" target="_blank">Notations</a>
					              </div>
					        </div>

					        <div class="dropdown">
					          <button class="dropbtn"><a href="#">HELP</a></button>
					            <div class="dropdown-content">
					              <a href="../about/tips_facts.php" target="_blank">Tips & facts</a>
					              <a href="https://github.com/Keli-el-halel/Janji-cuber" target="_blank">More Info</a>
					            </div>
					        </div>
					        </div>
				        
					        <!-- message body -->
					        <p>Scramble the cube anyway you wish and hit solve to start the<br><strong>Demo Rubik's cube solver</strong></p>
					        <br>

				    	<button class="btn btn-xs btn-primary shuffle">Shuffle</button>	
					        <!-- Timer -->
							<div id="display2">
					            <label id="hours">00</label>:<label id="minutes">00</label>:<label id="seconds">00</label>
					        </div>
					                <button class="btn" id="gobutton2" width="220" height="220" onclick="startTimer()">Start!</button>
					                <button class="btn" id="stopbutton2" width="220" height="220" onclick="stopTimer()">Stop</button>
				    </center>
				    <center>
				    	<br><button class="btn btn-xs btn-primary solver" onclick="startTimer()">Solve Cube</button>
						</center>
						<br><br>
						<footer class="footer"><span title="<?php echo $execution_time; ?>" >© 2019 Janji Productions.</span></footer>
				</div>
			</div>
		</div>
		
		<!-- javascript -->
		<!-- <script src='../js/cube/cuber.min.js'></script> -->
		<!-- <script src='../js/photon.js'></script> -->
		<script src='../js/jg.js'></script>
		<!-- <script src='//code.jquery.com/jquery-2.1.1.min.js'></script> -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script src="../js/cubejs/three.js"></script>	
	  <script src="../js/cubejs/OrbitControls.js"></script>
	  <script src="../js/cubejs/threex.domevent.js"></script>
	  <script src="../js/cubejs/threex.domevent.object3d.js"></script>
	  <script src="../js/cubejs/rubik.js"></script>

	  <script>

    $(function() {
      function init(dimensions) {
        dimensions = +(dimensions) || 3;

        var element = $("#scene").empty();
        var rubik = new Rubik(element, dimensions, '#fff');

        $("#button-shuffle").on('click', function(e) { e.preventDefault(); rubik.shuffle() });
        $(".shuffle").on('click', function(e) { e.preventDefault(); rubik.shuffle() });
        $("#button-solve").on('click', function(e) { e.preventDefault(); rubik.solve(); });
        $(".solver").on('click', function(e) {
         let done = rubik.solve();
         // alert(done); 
       	});
        $("#button-undo").on('click', function(e) { e.preventDefault(); rubik.undo(); });
        $("#button-reset").on('click', function(e) { e.preventDefault(); init(); });        
        $("#select-size").on('change', function() { init($(this).val()) });        
      };

      init();

      
    });

  </script>
		<!-- <script>

			var container 	= document.querySelector( '#container' ),
				cube 		= new ERNO.Cube();
				light 		= new Photon.Light( 10, 0, 100 );

			container.appendChild( cube.domElement );


		</script> -->
	</body>
</html>
