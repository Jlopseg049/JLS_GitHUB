<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DWECL1</title>
	</head>
	<body>
	<?php
		$nombre = "Jes&uacutes";
		?>
		<h1> Mi nombre es <?php echo $nombre?></h1>

		<form action="#">		  
			
			<label for="Edad">Edad: </label>
			<input type="number" id="Edad" name="Edad" min="1" max="100"><br><br>
			
			<button>Confirmar</button>
		</form>
	</body>
</html>