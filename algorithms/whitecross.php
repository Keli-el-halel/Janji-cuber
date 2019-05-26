<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content="Rubik’s Cube">
		<meta name="keywords" content="Erno Rubik’s Cube">
		<link rel="stylesheet" type="text/css" href="../styles/cube.css">
		<link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
        <!-- <link rel="stylesheet" type="text/css" href="../styles/cardinal.css"> -->
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
		<title>Algorithms stage4</title>
	</head>
	<body>
		<!-- navigation bar -->
		<div id="page links">
						<center>

							<h1 class="header"><br><img src="../media/janjilogo.png" width="150px" height="60"></h1>

							<div class="dropdown">
					            <button class="dropbtn"><a href="../index.html">HOME</a></button>
					        </div>

					        <div class="dropdown">
					            <button class="dropbtn"><a href="#">MODES</a></button>
					              <div class="dropdown-content">
					                <a href="../modes/solver.php" >Janji Solver</a>
					                <a href="../modes/learn.php" >Learn to solve</a>
					                <a href="../modes/free.php" >Free solve</a>
					              </div>
					        </div>
					        <div class="dropdown">
					            <button class="dropbtn"><a href="../algorithms/index.html">ALGORITHMS</a></button>
					              <div class="dropdown-content">
					                <a href="../algorithms/algorithms.php">Algorithm Page</a>
					                <a href="../algorithms/notations.php">Notations</a>
					              </div>
					        </div>

					        <div class="dropdown">
					          <button class="dropbtn"><a href="#">HELP</a></button>
					            <div class="dropdown-content">
					              <a href="../about/tips_facts.php">Tips & facts</a>
					              <a href="https://github.com/Keli-el-halel/Janji-cuber" target="_blank">More Info</a>
					            </div>
					        </div>
					    </center>
		</div>
		
		<!-- message body -->
		<center>
        <p><b><a href= "algorithms.php">Yellow Cross<a> | <a href= "yellowcorners.php">Yellow Corners</a> | <a href="middle.php">Middle Layer</a> | <a href="whitecross.php">WHITE CROSS</a> |</b><br>
			<b><a href="whiteedges.php">White Edges</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">Finale</a></b></p>
		</center>

		<p><b>Now that you have completed the middle layer, we are going to create a white cross like this...</b><br>&nbsp<img src="../media/wc/whatwewantwc.png"></p>
        <p>We are focusing on these four main pieces<br>&nbsp<img src="../media/wc/focus.png"></p>
        <p>Scan over the white face,<br></p>
        <p id="line">There are four possible states of the white face at this stage<br></p>
        <p>•<a href="#dot" class="drpbtn">White dot</a> &nbsp<img src="../media/wc/whatwewantml.png">•<a href="#lshape" class="drpbtn">L shape</a> &nbsp<img src="../media/wc/lshape.png"><br>•<a href="#line" class="drpbtn">White line</a> &nbsp<img src="../media/wc/lineshape.png">•White cross &nbsp<img src="../media/wc/whatwewantwc.png"></p>
        <p>If the white face has a <b>white line</b>;<br>&nbsp<img src="../media/wc/lineshape.png"></p>
        <p id="lshape">Select a face where the white line is facing you horizontally<br>&nbsp<img src="../media/wc/linehor.png"></p>
        <p>Perform F-R-U-R’-U’-F’<br></p>
        <p>If white face has an <b>L shape</b>;<br>&nbsp<img src="../media/wc/lshape.png"></p>
        <p id="dot">Select a face where the L shape is facing you in this position<br>&nbsp<img src="../media/wc/lhor.png"></p>
        <p>Perform F-R-U-R’-U’-R-U-R’-U’-F’<br></p>
        <p>If the white face has a <b>dot</b>;<br>&nbsp<img src="../media/wc/whatwewantml.png"></p>
        <p>Select any of the four sides as a face<br></p>
        <p>Perform F-R-U-R’-U’-F’<br></p>
        <p>You will now get an L shape<br>&nbsp<img src="../media/wc/lshape.png"></p>
        <p>Go back to the <a href="#lshape" class="drpbtn">L shape algorithm</a>, afterwards you will have your white cross<br>&nbsp<img src="../media/wc/whatwewantwc.png"></p>
					<p><a href="middle.php"><button class="btn btn-xs btn-warning">Back to Middle Layer</button></a>&nbsp&nbsp&nbsp&nbsp<a href="whiteedges.php"><button class="btn btn-xs btn-success">To White Edges</button></a></p>

        <!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>