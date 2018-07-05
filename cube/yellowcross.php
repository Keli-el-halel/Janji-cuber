<html>
	<head>
		<title>Cube Temp</title>
	</head>
	<body>
		<h1>Solve the cube</h1>
	</body>
</html>

<?php
	echo "You begin solving the cube by creating a yellow cross...";

	echo "<p>yellow cross present?</p>";
	echo "<form method='post' action='yellowcross.php'>
				<input type='submit' name='yes1' value='Yes' />
				<input type='submit' name='no1' value='No' />
		  </form>";

	if (isset($_POST['yes1'])){

		header('Location: http://localhost/cube/yellowcorners.php');		
	}
	else{
		echo "This stage is solved intuitively...";
	}
?>