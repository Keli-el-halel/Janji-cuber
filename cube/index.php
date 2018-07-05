<html>
	<head>
		<title>Cube Temp</title>
	</head>
	<body>
		<h1>Solve the cube</h1>
		<p>Click the button initialize the cube AI</p>
		<form method="post" action="index.php">
			<input type='submit' name='start' value='Begin puzzle' />
			<button name='refresh'>Refresh</button>
		</form>
	</body>
</html>

<?php
if (isset($_POST['start'])){

		header('Location: yellowcross.php');
				
} 
?>

