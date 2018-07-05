<html>
	<head>
		<title>Cube Temp</title>
	</head>
	<body>
		<h1>Solve the cube</h1>
	</body>
</html>

<?php

	echo "The next step is to create a white cross...";

	echo "<p>white cross present?</p>";
	echo "<form method='post' action='whitecross.php'>
				<input type='submit' name='yes4' value='Yes' />
				<input type='submit' name='no4' value='No' />
		  </form>";

	if (isset($_POST['yes4'])){

		header('Location: http://localhost/cube/index.php');		
	}
	else{
		echo "Perform F.R.U.R.U.F moves ...";
	}
?>