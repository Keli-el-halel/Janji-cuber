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
		<title>Cube Notations</title>
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
        <br>
        <p><i><b>Rubiks Cube Notations</b></i> are letters or words used to describe how to move a cube in an organized manner. Here are some of the words and letters we would use...</p>
        <br>
        <p> <b>CW</b>- Clockwise Rotation </p>
        <p> <b>CCW</b>- Counter Clockwise Rotation </p>
				<p> <b>PF</b>- Pivot Face </p>
        <p> slice – &nbsp<img src="../media/moves/slice.png" width="100px" height="100px" ></p>
				<p> R – CW right slice rotation - &nbsp<img src="../media/moves/rcw.png" width="100px" height="100px" ></p>
        <p> L - CW left slice rotation - &nbsp<img src="../media/moves/lcw.png" width="100px" height="100px" ></p> 
        <p> U - CW top layer rotation - &nbsp<img src="../media/moves/ucw.png" width="100px" height="100px" ></p>
        <p> D - CW bottom layer rotation - &nbsp<img src="../media/moves/dcw.png" width="100px" height="100px" ></p>
        <p> R’ – CCW right slice rotation - &nbsp<img src="../media/moves/rccw.png" width="100px" height="100px" ></p>
        <p> L’ - CCW left slice rotation - &nbsp<img src="../media/moves/lccw.png" width="100px" height="100px" ></p> 
        <p> U’ - CCW top layer rotation - &nbsp<img src="../media/moves/uccw.png" width="100px" height="100px" ></p>
        <p> D’ - CCW bottom layer rotation - &nbsp<img src="../media/moves/dccw.png" width="100px" height="100px" ></p>

		<p><a href="algorithms.php"><button class="btn btn-xs btn-success">To Algorithms page</button></a>&nbsp&nbsp&nbsp<a href="../modes/learn.php"><button class="btn btn-xs btn-success">Learn to Solve</button></a></p>

		<!-- javascript --> 
		<script src='../js/cube/cuber.min.js'></script>
		<script src='../js/photon.js'></script>
		<script src='../js/jg.js'></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<br><br>
		<footer class="footer">© 2019 Janji Productions.</footer>
	</body>
</html>