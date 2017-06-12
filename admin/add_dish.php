<?include("../blocks/db.php");

if (isset($_POST['food'])) {$food=$_POST['food'];
if ($food=='') {unset($food);}}

if (isset($_POST['weight'])) {$weight=$_POST['weight'];
if ($weight=='') {unset($weight);}}

if (isset($_POST['price'])) {$price=$_POST['price'];
if ($price=='') {unset($price);}}

if (isset($_POST['foodtime'])) {$foodtime=$_POST['foodtime'];
if ($foodtime=='') {unset($foodtime);}}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Добавить блюда</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<?
		if (isset ($food) || isset($weight) || isset($price) || isset($foodtime)):?>
		<? 
		$myrow_food=mysqli_query($db, "INSERT INTO dish(food, weight, price, time_id) VALUES ('$food', '$weight', '$price', '$foodtime')");
		if (isset ($myrow_food)) {
				echo "<p>Блюдо $food добавлено в базу!<a href='add_dish.php'>Добавить еще одно блюдо</a></p>";
		}
		else {
			 echo"<p>Блюдо НЕ добавлено в базу!Для устранения ошибки обратитесь к разработчикам.</p>";
		} 
	?>
	<?else:?>
		<form style="width: 200px; background: orangered;" name="add_dish" action="add_dish.php" method="post">
			<label for="food">Блюдо:</label><br>
			<input type="text" name="food" id="food" placeholder="Введите название блюда"><br><br>
			<label for="weight">Вес:</label><br>
			<input type="text" name="weight" id="weight" placeholder="Введите вес"><br><br>
			<label for="price">Цена:</label><br>
			<input type="text" name="price" id="price" placeholder="Введите цену"><br><br>
			<label for="foodtime">Время приема пищи:</label>
			<select name="foodtime" id="foodtime"  style="margin: 0px 20px 20px 0px; width: 100px;">
				<?
				$myrow=mysqli_query($db,"SELECT * FROM food_time");
				$result=mysqli_fetch_array($myrow);
				do {
					printf ("<option value=\"%s\">%s</option>", $result['id'], $result['time_meal']);
				}
				while ($result=mysqli_fetch_array($myrow));
				?>
			</select>
			<button type="submit" name="submit";>Добавить блюдо</button>
				<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться к заказу блюд</a>
			<?endif?>
		</form>
    </body>
</html>