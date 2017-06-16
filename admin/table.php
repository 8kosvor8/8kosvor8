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
	<form name="table" method="post" action="order.php">
		<h1>Сводная таблица</h1>
			<table style='background: paleturquoise; width: 1100px;'>
			   <tr >
			    	<td style="width: 550px"><b>Супы</b></td>
			    	<td style="width: 550px"><b>Горячее</b></td>
			    	<td style="width: 550px"><b>Гарнир</b></td>
			    	<td style="width: 550px"><b>Салаты</b></td>
			    	<td style="width: 550px"><b>Десерт</b></td>
			    	<td style="width: 550px"><b>Напитки</b></td>
			   </tr>
			   <tr>
			    	<td>
					     <?
					     $soup=mysqli_query($db, "SELECT * FROM dish WHERE time_id=1");
					     $result=mysqli_fetch_array($soup);
					     do {
					      	printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      	$all_dish[]=$result['price'];
					      	}
					     while ($result=mysqli_fetch_array($soup));
					     ?>
			    	</td>
			    	<td>
					     <?
					     $hotter=mysqli_query($db, "SELECT * FROM dish WHERE time_id=2");
					     $result=mysqli_fetch_array($hotter);
					     do {
					      printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      $all_dish[]=$result['price'];
					      }
					     while ($result=mysqli_fetch_array($hotter));
					     ?>
			    	</td>
			    	<td>
					     <?
					     $garnish=mysqli_query($db, "SELECT * FROM dish WHERE time_id=3");
					     $result=mysqli_fetch_array($garnish);
					     do {
					      printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      $all_dish[]=$result['price'];
					      }
					     while ($result=mysqli_fetch_array($garnish));
					     ?>
			    	</td>
			    	<td>
					     <?
					     $salad=mysqli_query($db, "SELECT * FROM dish WHERE time_id=4");
					     $result=mysqli_fetch_array($salad);
					     do {
					      printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      $all_dish[]=$result['price'];
					      }
					     while ($result=mysqli_fetch_array($salad));
					     ?>
			    	</td>
			    	<td>
					     <?
					     $dessert=mysqli_query($db, "SELECT * FROM dish WHERE time_id=5");
					     $result=mysqli_fetch_array($dessert);
					     do {
					      printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      $all_dish[]=$result['price'];
					      }
					     while ($result=mysqli_fetch_array($dessert));
					     ?>
			    	</td>
			    	<td>
					     <?
					     $beverages=mysqli_query($db, "SELECT * FROM dish WHERE time_id=6");
					     $result=mysqli_fetch_array($beverages);
					     do {
					      printf ('<input type="checkbox" name="table[]" value="%s">%s<br>', $result['id'], $result['food']);
					      $all_dish[]=$result['price'];
					      }
					     while ($result=mysqli_fetch_array($beverages));
					     ?>
			    	</td>
			    </tr>
			 </table><br>
			 <button type="submit" style="width: 200px; background: yellow;">Вывести заказ</button>
		 </form><br>									

		  <?
		  echo "Сумма всех блюд =".array_sum($all_dish)." руб. <br>";
		  echo "Колличество блюд ".count($all_dish);
		  ?>
		  <a href="../index.php" style="display: block; text-decoration: none; color: red;">Вернуться на главную</a>

		  <!--<?
		  $arr["one"]="1";
		  $arr["two"]="2";
		  $arr["three"]="3";
		  $arr["fore"]="4";
		  foreach ($arr as $key => $value) {
		  	echo "$key=$value<br>";
		  }
		  ?>
		  <?
		  $tr["Один"]="Саша";
		  $tr["Два"]="Света";
		  $tr["Три"]="Стас";
		  $com[]=$tr;
		  ?>
		  <?foreach ($com as $value):?>
		  	<?foreach ($value as $key => $value1):?>
		  	<p><?=$key?>=<?=$value1?></p>
		  	<?endforeach?>
		  <?endforeach?>-->
	</body>
</html>