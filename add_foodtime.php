<?include("blocks/db.php");?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Добавить блюда</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<form style="width: 200px; background: brown;" name="time_food" aсtion="result.php" method="post">
		<label for="foot">Еда</label>
		<input type="text" name="foot" id="foot">
		<label for="weight">Вес</label>
		<input type="text" name="weight" id="weight">
		<label for="price">Цена</label>
		<input type="text" name="price" id="price">
		<label for="time">Время приема пищи</label>
		<input type="text" name="time" id="time">
		<button type="submit" name="">Добавить</button>
	</form>
	
	<?php
	$foot;
	$myrow=mysqli_query($db,"INSERT INTO dish (time_id) VALUES ('$foot')");
	if ($myrow==true) {
		echo "завтрак";
	} esle {	
        echo "Все плохо";
	}
	?>
    </body>
</html>