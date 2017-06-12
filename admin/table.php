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
	<h1>Сбодная таблица</h1>
		<table style='background: paleturquoise; width: 660px;'>
		   <tr>
		    	<td><b>Блюда на завтрак</b></td>
		    	<td><b>Блюда на обед</b></td>
		    	<td><b>Блюда на ужин</b></td>
		   </tr>
		   <tr>
		    	<td>
				     <?
				     $breakfast=mysqli_query($db, "SELECT * FROM dish WHERE time_id=1");
				     $result=mysqli_fetch_array($breakfast);
				     do {
				      	printf ("<p>%s</p>", $result['food']);
				      	$all_dish[]=$result['price'];
				      	}
				     while ($result=mysqli_fetch_array($breakfast));
				     ?>
		    	</td>
		    	<td>
				     <?
				     $dinner=mysqli_query($db, "SELECT * FROM dish WHERE time_id=2");
				     $result=mysqli_fetch_array($dinner);
				     do {
				      printf ("<p>%s</p>", $result['food']);
				      $all_dish[]=$result['price'];
				      }
				     while ($result=mysqli_fetch_array($dinner));
				     ?>
		    	</td>
		    	<td>
				     <?
				     $supper=mysqli_query($db, "SELECT * FROM dish WHERE time_id=3");
				     $result=mysqli_fetch_array($supper);
				     do {
				      printf ("<p>%s</p>", $result['food']);
				      $all_dish[]=$result['price'];
				      }
				     while ($result=mysqli_fetch_array($supper));
				     ?>
		    	</td>
		    </tr>
		 </table>

		  <?
		  echo "Сумма всех блюд =".array_sum($all_dish)." руб. <br>";
		  echo "Колличество блюд ".count($all_dish);
		  ?>
		  <a href="../index.php" style="display: block; text-decoration: none; color: red;">Вернуться на главную</a>
	</body>
</html>