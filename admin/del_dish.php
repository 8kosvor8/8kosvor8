<?include("../blocks/db.php");

if (isset($_GET['id'])); {$id=($_GET['id']);}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Удаление блюда</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<h1>Удаление блюда</h1>
	<?if (isset ($id)):?>
	<? $myrow=mysqli_query($db, "DELETE FROM dish WHERE id=$id");
		if($myrow==true) {
			echo "<p>Блюдо удалено!!!</p>
			<p><a href='del_dish.php'>Вернуться к удалению блюд.</a></p>";
		}
	?>
	<?else:?>
	<? $myrow=mysqli_query($db, "SELECT * FROM dish");
		$result=mysqli_fetch_array($myrow);
		do {
			printf("<p><a href='del_dish.php?id=%s'>%s %s %s %s</a></p>", $result['id'], $result['food'], $result['weight'], $result['price'], $result['time_id']);
		}
		while ($result=mysqli_fetch_array($myrow));
	?>
	<?endif?>
	<a href="../index.php" style="display:block; text-decoration: none; color: red;">Вернуться к заказу блюд.</a>
	</body>
</html>