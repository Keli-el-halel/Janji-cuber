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
  
//echo " Run-time of script: ".$execution_time." secs"; 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Free Solve</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content="Rubik’s Cube">
		<meta name="keywords" content="Erno Rubik’s Cube">
		<link rel="stylesheet" type="text/css" href="../styles/cube.css">
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
		<title>Free Solve</title>
	</head>
	<body>
		<!-- navigation bar -->
		<div id="page links">
			<center>

				<h1 class="header"><br><img src="../media/janjilogo.png" width="150px" height="60"></h1>

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
				</center>
		</div>
		
		<!-- message body -->
		<center>Go ahead and solve the cube the way u know how</center>

		<!-- <center><br><button class="btn btn-sm btn-primary" id="button-shuffle">Scramble</button></center> -->
		<!-- virtual cube -->
		<div id='container' style="height: 100vh;"></div>
		
		<!-- Timer -->
		<div class="time_section container">
			<p id="demo"></p>
			<div id="display">
				<label id="hours">00</label>:<label id="minutes">00</label>:<label id="seconds">00</label>
			</div>
			
				<div class="dropbtn">
					<button class="btn" id="gobutton3" width="220" height="220" onclick="startTimer()">Start!</button>
					<button class="btn" id="stopbutton3" width="220" height="220" onclick="stopTimer()">Stop</button>
				</div>
		</div>
			<br><br>
			<footer class="footer"><span title="<?php echo $execution_time; ?>" >© 2019 Janji Productions.</span></footer>

		<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<!-- <script src='//code.jquery.com/jquery-2.1.1.min.js'></script> -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script id="container_query">

			var container 	= document.querySelector( '#container' ),
				cube 		= new ERNO.Cube();
				light 		= new Photon.Light( 10, 0, 100 );

			container.appendChild( cube.domElement );


		</script>
				<script>
// function myFunction() {
//   return Math.PI;
// }

document.getElementById("demo").innerHTML = stoptimer();
</script>

	</body>
</html>