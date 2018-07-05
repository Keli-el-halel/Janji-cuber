<?php
		if (isset($_POST['yes1'])){ //I am feeling weak 
			
			echo "<p>Are you feeling any chest pains?</p>"; //qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq
						echo "<form method='post' action='system.php'>
								<input type='submit' name='yes2' value='Yes' />
								<input type='submit' name='no2' value='No' />
								</form>";
		}elseif (isset($_POST['no1'])) { // i am not feeling weak
			$malaria = 0;
			$Asthma = 0;
			$Diabetes = 0;
			echo "<p>Are you feeling any chest pains?</p>"; //qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq
						echo "<form method='post' action='system.php'>
								<input type='submit' name='yes3' value='Yes' />
								<input type='submit' name='no3' value='No' />
								</form>";
		}
?>