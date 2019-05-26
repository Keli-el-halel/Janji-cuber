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
		<title>Algorithms stage3</title>
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
        <p><b><a href= "algorithms.php">Yellow Cross<a> | <a href= "yellowcorners.php">Yellow Corners</a> | <a href="middle.php">MIDDLE LAYER</a> | <a href="whitecross.php">White Cross</a> |</b><br>
			<b><a href="whiteedges.php">White Edges</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">Finale</a></b></p>
		</center>

		<p><b>What we want to achieve</b><br>&nbsp<img src="../media/mid/whatwewantml.png"></p>
        <p>Middle layer edge pieces can only be in these 8 possible positions. (after completing the previous stages)<br>&nbsp<img src="../media/mid/possposml.png">&nbsp<img src="../media/mid/possposml2.png"></p>
        <p>The white face (point) should be facing up for the rest of the cube solving stages<br>&nbsp<img src="../media/mid/whitefacingup.png"></p>
        <p>There are only four middle layer edge pieces<br>&nbsp<img src="../media/mid/4mlpieces.png"></p>
        <p><br><b>We must first place all middle layer edge pieces at the top slice like this...</b><br><br>&nbsp<img src="../media/mid/mlpiecesontop.png"></p>
        <p><b>We do this by locating any misplaced middle layer edge piece at the middle slice</b><br>&nbsp<img src="../media/mid/misplacedmlpieces.png"></p>
        <p>Using a pivot face that has the misplaced piece at the right, <br>&nbsp<img src="../media/mid/mlpiecetotop.png"></p>
        <p>(make sure the piece above the pivot face is not a middle layer piece by rotating the top slice until it is a white edge piece there)<br>&nbsp<img src="../media/mid/mlpiecetotopx.png">&nbsp<img src="../media/mid/mlpiecetotopy.png"></p>
        <p>Perform U-R-U’-R’-U’-F’-U-F<br>&nbsp<img src="../media/mid/mlpiecetotopface.png"></p>
        <p>Repeat for any other misplaced middle edge piece<br>&nbsp<img src="../media/mid/mlpiecetotopface2.png"></p>
        <p><b>Now we can begin placing the middle edge pieces in the right positions</b><br>&nbsp<img src="../media/mid/mlpiecestoptomid.png"></p>
        <p>Locate blue-red edge piece<br>&nbsp<img src="../media/mid/locatebr.png"></p>
        <p id="mid">•	If blue square of the blue-red piece is on top;<br>&nbsp<img src="../media/mid/locatebr.png"></p>
        <p>Twist top layer placing the blue-red piece at the red face<br>&nbsp<img src="../media/mid/twistbr.png"></p>
        <p>(using the red face) perform U-R-U’-R’-U’-F’-U-F<br>&nbsp<img src="../media/mid/brpos1.png"></p>
        <p>•	If red square of the blue-red piece is on top;<br>&nbsp<img src="../media/mid/locatebr2.png"></p>
        <p>Twist top layer placing the blue-red piece at the blue face<br>&nbsp<img src="../media/mid/twistbr2.png"></p>
        <p>(using the blue face) perform U’-L’-U-L-U-F-U’-F’<br>&nbsp<img src="../media/mid/brpos2.png"></p>
        <p>The blue red piece should now be in position. <br>&nbsp<img src="../media/mid/correctbr.png"></p>
				
				<p><br><b>The other middle pieces</b></p>
        <p><a href="#mid" class="drpbtn">Repeat for red-green</a>; where If top color is green, place piece at red face and perform U’-L’-U-L-U-F-U’-F’
        <br>Else if top color is red, place piece at green face and perform U-R-U’-R’-U’-F’-U-F,<br></p>
        
        <p><a href="#mid" class="drpbtn">For green-orange</a>; where If top color is orange, place piece at green face and perform U’-L’-U-L-U-F-U’-F’
        <br>Else if top color is green, place piece at orange face and perform U-R-U’-R’-U’-F’-U-F,<br></p>

				<p><a href="#mid" class="drpbtn">And for orange-blue</a> piece; where If top color is blue, place piece @ orange face && do U’-L’-U-L-U-F-U’-F’<br>
				Else if top color is orange, place piece at blue face and perform U-R-U’-R’-U’-F’-U-F.<br></p>
				<p><a href="yellowcorners.php"><button class="btn btn-xs btn-warning">Back to Yellow Corners</button></a>&nbsp&nbsp&nbsp&nbsp<a href="whitecross.php"><button class="btn btn-xs btn-success">To White Cross</button></a></p>

				<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>