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
		<title>Algorithms stage2</title>
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
        <p><b><a href= "algorithms.php">Yellow Cross<a> | <a href= "yellowcorners.php">YELLOW CORNERS</a> | <a href="middle.php">Middle Layer</a> | <a href="whitecross.php">White Cross</a> |</b><br>
			<b><a href="whiteedges.php">White Edges</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">Finale</a></b></p>
		</center>

		<p><b>What we want to achieve</b><br>&nbsp<img src="../media/ycn/whatwewant.png"></p>
        <p>Corner pieces can only be in these 8 possible positions<br>&nbsp<img src="../media/ycn/cornerpositions.png"></p>
        <p>Maintaining the yellow face (point/center) facing up…<br>&nbsp<img src="../media/ycn/y_face.png"></p>
        <p><br><b>We must first locate any yellow corner piece on the top layer</b></p>
        <p>We do this by bringing the corner pieces with a yellow square on them to the bottom layers opposite the yellow face<br>&nbsp<img src="../media/ycn/yellowcornerstobottom.png"></p>
        <p>When found, Use the face that has the yellow corner piece at the top right position<br>&nbsp<img src="../media/ycn/ycornertopright.png"></p>
        <p>Perform R-D-R’-D’ move<br><br></p>
				<p><b>Parity Consideration</b></p>
        <p>Parity 1: Interchange of yellow corner pieces<br>&nbsp<img src="../media/ycn/ycornersparity1.png"></p>
        <p>Simply Rotate the D slice first and then repeat R’-D’-R-D move<br><br></p>
        <p><b>When all yellow corner pieces are at the bottom like this…</b><br>&nbsp<img src="../media/ycn/ycorners@bottom.png"></p>
				<p><b>We will now begin to complete the yellow face</b></p>
				<p>Locate yellow-blue-red corner piece.<br>&nbsp<img src="../media/ycn/locateyrb.png"></p>
				<p>Rotate D slice to place it at the bottom right corner of the blue face<br>&nbsp<img src="../media/ycn/rotateyrbtoblueface.png"></p>
				<p><br><b>Confirm which position it is in...</b></p>
				<p>•	Position 1: perform R’-D’-R-D<br>&nbsp<img src="../media/ycn/rotateyrbtoblueface.png"></p>
        <p>•	Position 2: perform R’-D-D-R-D-R’-D’-R-D<br>&nbsp<img src="../media/ycn/yrbpos2.png"></p>
        <p>•	Position 3: perform D’-R’-D-R<br>&nbsp<img src="../media/ycn/yrbpos3.png"></p>
        <p>Repeat for yellow-red-green (PF-red)(yrg), yellow-green-orange (PF-green)(yog), and yellow-orange-blue (PF-orange)(yob) pieces.</p>
				<p><br><b>Parity Consideration</b></p>
				<p>Parity 2: misplaced yellow corner piece in correct color group<br>&nbsp<img src="../media/ycn/ycornersparity2.png"></p>
        <p>Simply perform R’-D’-R-D move to displace the piece<br></p>
        <p><a href="algorithms.php"><button class="btn btn-xs btn-warning">Back to Yellow Cross</button></a>&nbsp&nbsp&nbsp&nbsp<a href="middle.php"><button class="btn btn-xs btn-success">To Middle Layer</button></a></p>
        
		<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>