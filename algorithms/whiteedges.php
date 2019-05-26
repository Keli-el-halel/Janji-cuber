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
		<title>Algorithms stage5</title>
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
        <p><b><a href= "algorithms.php">Yellow Cross<a> | <a href= "yellowcorners.php">Yellow Corners</a> | <a href="middle.php">Middle Layer</a> | <a href="whitecross.php">White Cross</a> |</b><br>
			<b><a href="whiteedges.php">WHITE EDGES</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">Finale</a></b></p>
		</center>

		<p><b>Now we are going to group the white edge pieces with the colors around it like this...</b><br>&nbsp<img src="../media/we/whatwewantwe.png"></p>
        <p>Maintaining the white face on top…<br>&nbsp<img src="../media/we/whatwewantwc.png"></p>
        <p>Rotate the top slice until (at least) two white edge pieces are connected to their correct faces<br></p>
        <p>It can be connected in these three possible positions<br></p>
        <p>•<a href="#next" class="drpbtn">Next to each other</a>&nbsp<img src="../media/we/edgeconnect2.png">•<a href="#opp" class="drpbtn">Opposite each other</a>&nbsp<img src="../media/we/edgeconnect.png" id="next"><br>•All four are connected&nbsp<img src="../media/we/edgeconnect3.png"></p>
        <p>If the white edge pieces connected are <b>next to each other</b><br>&nbsp<img src="../media/we/edgeconnect21.png"></p>
        <p id="opp">Select the face at the right of the two misplaced white edge pieces as your pivot face<br>&nbsp<img src="../media/we/nextto.png"></p>
        <p>Perform R-U-R’-U-R-U-U-R’-U<br></p>
        <p>If the white edge pieces connected are <b>opposite each other</b><br>&nbsp<img src="../media/we/edgeconnect23.png"></p>
        <p>Select the face of any of the two correctly placed edge pieces.<br>&nbsp<img src="../media/we/edgeconnect.png"></p>
        <p>Perform R-U-R’-U-R-U-U-R’<br></p>
        <p>You will now have the white edge pieces connected next to each other<br>&nbsp<img src="../media/we/edgeconnect21.png"></p>
        <p>Use algorithm for solving white edge pieces connected next to each other<br></p>
        <p>If all the white edge pieces are connected to their centers,<br>&nbsp<img src="../media/we/edgeconnect22.png"></p>
        <p>Then proceed to the next stage.<br></p>
				<p><a href="whitecross.php"><button class="btn btn-xs btn-warning">Back to White Cross</button></a>&nbsp&nbsp&nbsp&nbsp<a href="cornerperm.php"><button class="btn btn-xs btn-success">To White Corners</button></a></p>

        <!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>