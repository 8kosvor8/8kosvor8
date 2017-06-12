<?php

if (isset($_POST['bludo_one'])) {$bludo_one=$_POST['bludo_one'];
if ($bludo_one=='') {unset($bludo_one);}}

if (isset($_POST['bludo_two'])) {$bludo_two=$_POST['bludo_two'];
if ($bludo_two=='') {unset($bludo_two);}}

if (isset($_POST['bludo_three'])) {$bludo_three=$_POST['bludo_three'];
if ($bludo_three=='') {unset($bludo_three);}}

if (isset($_POST['bludo_four'])) {$bludo_four=$_POST['bludo_four'];
if ($bludo_four=='') {unset($bludo_four);}}

if (isset($_POST['bludo_five'])) {$bludo_five=$_POST['bludo_five'];
if ($bludo_five=='') {unset($bludo_five);}}



if (isset($_POST['quantity_one'])) {$quantity_one=$_POST['quantity_one'];
if ($quantity_one=='') {unset($quantity_one);}}

if (isset($_POST['quantity_two'])) {$quantity_two=$_POST['quantity_two'];
if ($quantity_two=='') {unset($quantity_two);}}

if (isset($_POST['quantity_three'])) {$quantity_three=$_POST['quantity_three'];
if ($quantity_three=='') {unset($quantity_three);}}

if (isset($_POST['quantity_four'])) {$quantity_four=$_POST['quantity_four'];
if ($quantity_four=='') {unset($quantity_four);}}

if (isset($_POST['quantity_five'])) {$quantity_five=$_POST['quantity_five'];
if ($quantity_five=='') {unset($quantity_five);}}



if (isset($_POST['soup'])) {$soup=$_POST['soup'];
if ($soup=='') {unset($soup);}}

if (isset($_POST['second'])) {$second=$_POST['second'];
if ($second=='') {unset($second);}}

if (isset($_POST['dessert'])) {$dessert=$_POST['dessert'];
if ($dessert=='') {unset($dessert);}}

if (isset($_POST['compote'])) {$compote=$_POST['compote'];
if ($compote=='') {unset($compote);}}

if (isset($_POST['salat'])) {$salat=$_POST['salat'];
if ($salat=='') {unset($salat);}}

if (isset($_POST['food'])) {$foot=$_POST['food'];
if ($food=='') {unset($food);}}

$discount1=5;
$discount2=7;
$discount3=10;
$sum_discount;
$sum=$quantity_one*$soup+$quantity_two*$second+$quantity_three*$dessert+$quantity_four*$compote+$quantity_five*$salat;


if ($sum>=100 && $sum<150) 
{
    $sum_discount=$sum-$sum/100*$discount1;
}
elseif ($sum>=150 && $sum<200) {
    $sum_discount=$sum-$sum/100*$discount2;
}
elseif ($sum>=200) {
    $sum_discount=$sum-$sum/100*$discount3;
}
else {
    $sum_discount=$sum;
}

$discount=$sum-$sum_discount;

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?=$foot?></title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
    <h1>Заказ на: <?=$food?></h1>
        <table>
            <tr>
                <td><?=$bludo_one?>:</td>
                <td><?=$quantity_one?>шт.</td>
                <td><?=$soup?>р.</td>
            </tr>
             <tr>
                <td><?=$bludo_two?>:</td>
                <td><?=$quantity_two?>шт.</td>
                <td><?=$second?>р.</td>
            </tr>
             <tr>
                <td><?=$bludo_three?>:</td>
                <td><?=$quantity_three?>шт.</td>
                <td><?=$compote?>р.</td>
            </tr>
             <tr>
                <td><?=$bludo_four?>:</td>
                <td><?=$quantity_four?>шт.</td>
                <td><?=$dessert?>р.</td>
            </tr>
             <tr>
                <td><?=$bludo_five?>:</td>
                <td><?=$quantity_five?>шт.</td>
                <td><?=$salat?>р.</td>
            </tr>
        </table>
        <div style="width: 462px;">
            <p>Сумма: <?=$sum?>р.</p>
        </div>
        <div style="width: 462px; background: yellow">
            <p>Скидка: <?=$discount?>р.</p>
        </div>
        <div style="width: 462px;">
            <p>Сумма итого: <?=$sum_discount?>р.</p>
        </div>
	</body>
</html>