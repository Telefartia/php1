
			<?php
			$myProfile = array(
						"Student ID" => "25214172",
						"Full Name" => "Ray Gabriel Aquiatan Eturma",
						"Program" => "BSIT",
						"Year Level" => "3",
						"Section" => "3C",
						"Email" => "raygabrieleturma9@gmail.com",
						"Status" => "Singled"
						);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eturma Lab Act 4</title>
</head>
<body>

	<h2>Student Information</h2>

		<table border="2">

		  <?php
		  foreach($myProfile as $key => $info){
		  	echo "<tr>";
		  	echo "<th>" . $key . "</th>";
		  	echo "<td>" . $info . "</td>";
		  	echo "</tr>";
		  }


		  ?>

</table>

</body>
</html>
