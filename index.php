<?include("blocks/db.php");?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP</title>
	</head>
	<body>
		<form  name="dish" method="post" action="result.php">
			<div style="width: 200px; float: left; padding: 10px; background: aqua; text-align: center;">
				<label for="soup">Суп</label>
				<input type="text" name="bludo_one" id="soup">
				<label for="second">Второе</label>
				<input type="text" name="bludo_two" id="second">
				<label for="dessert">Десерт</label>
				<input type="text" name="bludo_three" id="dessert">
				<label for="compote">Компот</label>
				<input type="text" name="bludo_four" id="compote">
				<label for="salat">Салат</label>
				<input type="text" name="bludo_five" id="salat">
			</div>
			<div style="width: 200px; float: left; padding: 10px; background: gold; text-align: center;">
				<label for="quantity_soup">Количество порций</label>
				<input type="text" name="quantity_one" id="quantity_soup">
				<label for="quantity_second">Количество порций</label>
				<input type="text" name="quantity_two" id="quantity_second">
				<label for="quantity_dessert">Количество порций</label>
				<input type="text" name="quantity_three" id="quantity_dessert">
				<label for="quantity_compote">Количество порций</label>
				<input type="text" name="quantity_four" id="quantity_compote">
				<label for="quantity_salat">Количество порций</label>
				<input type="text" name="quantity_five" id="quantity_salat">
			</div>	
			<div style="width: 200px; display: inline-block; padding: 10px; background: green; text-align: center;">
				<label for="one">Цена супа</label>
				<input type="text" name="soup" id="one">
				<label for="two">Цена второго</label>
				<input type="text" name="second" id="two">
				<label for="three">Цена десерта</label>
				<input type="text" name="dessert" id="three">
				<label for="four">Цена компота</label>
				<input type="text" name="compote" id="four">
				<label for="five">Цена салата</label>
				<input type="text" name="salat" id="five">
			</div>
			<div style="padding: 20px 0px 0px 200px;">
				<select value="time" name="food" style="width: 200px; background: yellow;">
					<option>Выбор</option>
					<option>завтрак</option>
					<option>обед</option>
					<option>ужин</option>
				</select>
		<button type="submit" style="width: 150px; background: rebeccapurple;">Отправить</button>
		 <a href="admin/add_dish.php" style="display: block; text-decoration: none;">Добавить новое блюдо</a>
		  <a href="admin/all_dish.php" style="display: block; text-decoration: none;">Просмотр/редактирование меню</a>
		  <a href="admin/del_dish.php" style="display: block; text-decoration: none;">Удалить блюдо</a>
		</div>
		</form>
	</body>
</html>