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
		<title>Algorithms finale</title>
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
			<b><a href="whiteedges.php">White Edges</a> | <a href="cornerperm.php">White Corners</a> | <a href="finale.php">FINALE</a></b></p>
		</center>

        <p>This final stage is very simple but demands focus<br></p>
        <p><b>The final aim is to put the white square of a white corner piece on top</b><br>&nbsp<img src="../media/finale/inposup.png"></p>
        <p>Select any of the four side faces to be a pivot face<br></p>
        <p>You are to focus only on the white corner piece on the top right of your chosen face<br>&nbsp<img src="../media/finale/focusfinale.png"></p>
        <p><i>(you shouldn’t change the face you use for this stage until it is completed)</i><br><br></p>
        <p>There are three possible positions for the corner piece you are focusing on…<br></p>

        <p>•It is <a href="#correct" class="drpbtn">in its correct position</a><br>&nbsp<img src="../media/finale/inpos.png"></p>
        <p>•The white square <a href="#right" class="drpbtn">is facing right</a><br>&nbsp<img src="../media/finale/whiteright.png" id = "correct"></p>
        <p>•The white square <a href="#you" class="drpbtn">is facing you</a><br>&nbsp<img src="../media/finale/whiteface.png"></p>
        <p id="right">If the white corner piece <b>is in its correct position</b><br>&nbsp<img src="../media/finale/inpos.png"></p>
        <p id="you">Perform U (moving to the next corner piece)<br></p>

        <p>If the white square <b>is facing right</b><br>&nbsp<img src="../media/finale/whiteright.png"></p>
        <p>Perform (R’-D’-R-D)x2 U<br></p>
        <p>If the white square <b>is facing you</b><br>&nbsp<img src="../media/finale/whiteface.png"></p>
        <p>Perform (D’-R’-D-R)x2 U<br></p>
        <p>Note that the cube would look scrambled at many points again<br>
        but you are to maintain focus on the top right corner piece until the end (don’t worry. If done correctly, it should all come back together)<br></p>
        
        <p>At the end of this stage, you would get the cube in this position<br>&nbsp<img src="../media/finale/finalu.png"><br>OR solved<br>&nbsp<img src="../media/finale/orient.png"></p>
        <p>If the cube is in this position…<br>&nbsp<img src="../media/finale/finalu.png"></p>
        <p>Simply rotate the U slice or top layer until the cube is completed.<br></p>
				<p><a href="cornerperm.php"><button class="btn btn-xs btn-warning">Back to White Corners</button></a></p>

        <!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>