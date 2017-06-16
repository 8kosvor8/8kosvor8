<?include("../blocks/db.php");

if (isset($_POST['id'])) {$id=$_POST['id'];}

if (isset($_POST['food'])) {$food=$_POST['food'];}

if (isset($_POST['price'])) {$price=$_POST['price'];}

if (isset($_POST['table'])) {$table=$_POST['table'];}
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
	<form name="table" method="post" action="order.php">
		<h1>Заказ</h1>
		<?
		  
		  foreach ($table as $value) {
		  	 $sr=mysqli_query($db, "SELECT * FROM dish WHERE id=$value");
			 $result=mysqli_fetch_array($sr);
			 	printf ('%s %sр.<br>', $result['food'], $result['price']);
			 	$price[]=$result['price'];
		  }
		 ?>
		 <p style="color: blue;">Стоимость заказа: <?=array_sum($price)?>р.</p>

		 <a href="table.php" style="display: block; text-decoration: none; color: red;">Вернуться к выбору меню</a>
	</body>
</form>