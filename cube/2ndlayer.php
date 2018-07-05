<html>
	<head>
		<title>Cube Temp</title>
	</head>
	<body>
		<h1>Solve the cube</h1>
	</body>
</html>

<?php

	echo "Its now time to solve the middle layer of the cube...";

	echo "<p>2nd layer fixed?</p>";
	echo "<form method='post' action='2ndlayer.php'>
				<input type='submit' name='yes3' value='Yes' />
				<input type='submit' name='no3' value='No' />
		  </form>";

	if (isset($_POST['yes3'])){

		header('Location: http://localhost/cube/whitecross.php');		
	}
	else{
		echo "Perform U.R. & U.L moves... ";
	}
?>