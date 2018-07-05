<html>
	<head>
		<title>Cube Temp</title>
	</head>
	<body>
		<h1>Solve the cube</h1>
	</body>
</html>

<?php

	echo "After getting a yellow cross you now arrange the yellow corners";

	echo "<p>yellow corners present?</p>";
	echo "<form method='post' action='yellowcorners.php'>
				<input type='submit' name='yes2' value='Yes' />
				<input type='submit' name='no2' value='No' />
		  </form>";

	if (isset($_POST['yes2'])){

		header('Location: http://localhost/cube/2ndlayer.php');		
	}
	else{
		echo "Perform R.D.R.D move @ corner ... ";
	}
	
?>