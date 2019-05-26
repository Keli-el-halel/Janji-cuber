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
		<title>Tips & Facts</title>
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
    <div id="page-container">
			<div id="content-wrap">
				<!-- all other page content -->
				</div>    <br>
        <p> These <i><b>Tips and Facts</b></i> of solving a Rubik's cube would help you learn easier and in the best way...</p>
        <br>
        <p><b>Rubiks Cube Algorithms</b> are to ensure you achieve a desired solved state without misplacing other solved pieces on the way to completion</p>
        <!-- <p></p>-best corner of faces to use for each stage -->
        <p>Look at the cube in the form of pieces</p>
        <p>(The 6) <b>Middle pieces</b> and their positions never change</p>
        <p>Blue is opposite to Green, Orange is opposite to Red, White is opposite to Yellow</p>
        <p><b>There are 4 types of pieces</b>; Center piece, Edge pieces and Corner pieces</p>
        <p><b>Grey areas</b> are parts of the cube you should blank out at a stage</p>
        <p><b>A color’s ‘face’</b> is represented by the point in the middle of one of the 6 sides of the cube</p>
        <p><b>A/The Pivot Face</b> - area of the cube that should be in front of you </p>
        <p><b>A misplaced piece</b> – piece that is not with its colour group</p>
        <p><b>A Corner/Edge pieces</b> - img</p>
        <p><b>A Color Group</b> – cube squares of the same color</p>
        <p><b>A Parity</b> – an unusual error that cant be solved with normal algorithms</p>
        <p><b>An Interchange</b> – swap positions</p>

		<p><a href="../algorithms/algorithms.php"><button class="btn btn-xs btn-success">To Algorithms page</button></a>&nbsp&nbsp&nbsp<a href="../modes/learn.php"><button class="btn btn-xs btn-success">Learn to Solve</button></a></p>
			<br><br>
		<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
			</div>
			<footer class="footer">© 2019 Janji Productions.</footer>
		
	</body>
</html>
