<?include("../blocks/db.php");

if (isset($_GET['id'])); {$id=($_GET['id']);}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Меню</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<h1>Меню</h1>
	<?if (isset ($id)):?>
		<? 
		$myrow=mysqli_query($db, "SELECT * FROM dish WHERE id='$id'");
		$result=mysqli_fetch_array($myrow);
		$time_id=$result['time_id'];
	?>
		<form style="width: 200px; background: greenyellow;" name="edit_dish" action="edit_dish.php" method="post">
			<label for="food">Блюдо:</label><br>
			<input type="text" name="food" id="food" value="<?=$result['food']?>"><br><br>
			<label for="weight">Вес:</label><br>
			<input type="text" name="weight" id="weight" value="<?=$result['weight']?>"><br><br>
			<label for="price">Цена:</label><br>
			<input type="text" name="price" id="price" value="<?=$result['price']?>"><br><br>
			<label style="display: block;" for="foodtime">Время приема пищи</label>
			<select name="foodtime" id="foodtime">
				<?
				$myrow=mysqli_query($db,"SELECT * FROM food_time");
				$result=mysqli_fetch_array($myrow);
				do {
					printf("<option value=\"%s\">%s</option>", $result['id'], $result['time_meal']);
				}
				while ($result=mysqli_fetch_array($myrow)); 
				?>
			</select><br>
			<input id="id" type="hidden" name="id" value="<?=$id?>"><br>
			<button type="submit" name="submit";>Сохранить</button><br>
			<a href="../index.php" style="display: block; text-decoration: none; color: red;">Вернуться на главную</a>
		</form>
		<?else:?>
			<?
				$myrow=mysqli_query($db,"SELECT * FROM dish");
				$result=mysqli_fetch_array($myrow);
				do {
					printf ("<p><a href='all_dish.php?id=%s'>%s %s %s %s</a></p>", $result['id'], $result['food'],$result['weight'],$result['price'],$result['time_id']);
				}
				while ($result=mysqli_fetch_array($myrow));
			?>
				<a href="../index.php" style="display: block; text-decoration: none; color: red;">Вернуться на главную</a>
			<?endif?>
    </body>
</html>