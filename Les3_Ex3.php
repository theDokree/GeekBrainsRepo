//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.

<?php

$towns = array(
	"Московская область"=>array("Москва", "Зеленоград", "Клин"),
	"Ленинградская область"=>array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"),
	"Рязанская область"=>array("Рязань", "Косимов", "Скопин", "Шацк"));
	
foreach($towns as $obl => $name)
{
	echo "<h3>$obl</h3>";
	echo "<ul>";
	foreach($name as $key => $value)
	{
		echo "<li>$value</li>";
	}
	echo "</ul>";
}

?>