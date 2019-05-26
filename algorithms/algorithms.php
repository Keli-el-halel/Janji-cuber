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
		<title>Algorithms</title>
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
        <p><b><a href= "algorithms.php">YELLOW CROSS<a> | <a href= "yellowcorners.php">Yellow Corners</a> | <a href="middle.php">Middle Layer</a> | <a href="whitecross.php">White Cross</a> |</b><br>
			<b><a href="whiteedges.php">White Edges</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">Finale</a></b></p>
		</center>

		<p><b>What we want to achieve</b><br>&nbsp<img src="../media/yc/cross2.png"></p>


		<p>The yellow face (point) should be facing up for the first 2 stages (yellow cross and yellow corners)<br>&nbsp<img src="../media/yc/y_face.png"></p>

		<p>Edge pieces can only be in these 12 possible positions on the cube<br>&nbsp<img src="../media/yc/edgelocations.png"></p>

		<p><b>Search round the cube for the yellow edge piece</b><br><br>
			We want to get all the yellow edge pieces to the bottom like this... <br>&nbsp<img src="../media/yc/fouredges.png"></p>

		<p><b>To get them in the above position, check the current position of each yellow piece...</b><br>

		<p>· Position 1: perform F-F &nbsp<img src="../media/yc/yc_pos1.png"></p>

		<p>· Position 2: perform F-R’ &nbsp<img src="../media/yc/yc_pos2.png"></p>

		<p>· Position 3: perform L &nbsp<img src="../media/yc/yc_pos3.png"></p>

		<p>· Position 4: perform R’ &nbsp<img src="../media/yc/yc_pos4.png"></p>

		<p>· Position 5: perform F-L &nbsp<img src="../media/yc/yc_pos5.png"></p><br>

		<p><b>Parity Consideration</b></p>
		<p>Parity 1: 2 yellow edge pieces next to each other interchanging <br>&nbsp<img src="../media/yc/yc_parity1.png"></p>

		<p>Rotate D slice until no yellow edge pieces interchange</p>

		<p>Parity 2: 2 yellow edge pieces opposite each other interchanging <br>&nbsp<img src="../media/yc/yc_parity2.png"></p>

		<p>Rotate D slice and perform/repeat F-F move until no yellow edge pieces interchange</p>

		<p>The four edge pieces should now be below the yellow face/opposite the white face <br>&nbsp<img src="../media/yc/fouredges.png"></p><br>

		<p><b>Finishing off easy</b></p>
		<p>Search for the yellow-blue edge piece <br>&nbsp<img src="../media/yc/locate_yb.png"></p>

		<p>· Rotate D until the yellow-blue edge piece is in contact with the blue center <br>&nbsp<img src="../media/yc/rotateD_yb.png">&nbsp<img src="../media/yc/rotateD_yb2.png"></p>

		<p> </p>

		<p>· Rotate blue center face by 180 degrees to make the yellow blue edge connect with the yellow center and blue center <br>&nbsp<img src="../media/yc/rotate180_yb.png">&nbsp<img src="../media/yc/rotate180_yb2.png"></p>

		<p><i>Repeat this sequence for the yellow-red, yellow-green and yellow-orange edge pieces</i></p>

		<p>By the end of this procedure the Yellow cross should be completed. <br>&nbsp<img src="../media/yc/cross2.png"></p><br>
		<p><a href="yellowcorners.php"><button class="btn btn-xs btn-success">To Yellow Corners</button></a></p>

		<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>

	</body>
</html>