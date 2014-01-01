<!DOCTYPE html PUBLIC 
	"-//W3C//DTD XHTML 1.O Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv-"Content=Type"
	content="text/html"; charset="utf-8"/>
	<title>Calendar</title>
</head>
	<body>
		<form action="calendar.php" method="post">
			<?php # Script 2.9 - calander.php
				//This script makes three pull-down menus
				//for an HTML form" months, days, years.
				
				//Make the months array:
				$months = array('' => "January", "Febuary","March", 
				"April", "May", "June", "July", "August", "September",
				"October", "November", "December" );


				//Make the months pull-down menu:
				echo "<select name-'month'>";
				foreach ($months as $key => $value) {
					echo "<option value=\"$key\">
					$value
					</option>\n";
				}

				echo "</select>";

				//Make the days pull-down menu:
				echo "<select name='day'>";
					for ($day=1; $day <= 31 ; $day++) { 
						echo "<option value=\='$day\'>
						$day</option>\n";
					}

				echo "</select>";

				//Make the years pull-down menu:
				echo "<select name='year'>";
					for ($years=2011; $years <= 2021 ; $years++) { 
							echo "<option value=\='$years\'>
							$years</option>\n";	
					}
				
				echo "</select>";
				
			
			?>
		</form>
	</body>
</html>