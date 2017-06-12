<?include("../blocks/db.php");

if (isset($_POST['id'])) {$id=$_POST['id'];}

if (isset($_POST['food'])) {$food=$_POST['food'];}

if (isset($_POST['weight'])) {$weight=$_POST['weight'];}

if (isset($_POST['price'])) {$price=$_POST['price'];}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Редактирование блюда</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<?
	$myrow=mysqli_query($db, "UPDATE dish SET food='$food', weight='$weight', price='$price' WHERE id='$id'");
		if ($myrow==true) {
			echo "<p>Блюдо $food обновлено!!!</p>
				<p><a href='all_dish.php'>Вернуться к редактированию</a></p>
				<p><a href='../index.php'>Вернуться к заказу блюд</a></p>";
		} else{
			echo "<p>Блюдо НЕ обновлено! Обратитесь к администрации сайта</p>";
		}
	?>
	</body>
</html>