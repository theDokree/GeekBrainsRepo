//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. Можно strtr, можно str_replace().

<?php

function Translate($word)
{
	$letters = array(
	" "=>"_"
);
	
    echo strtr($word, $letters);
}

Translate("привет как дела");

?>