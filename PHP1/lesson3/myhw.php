<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
</head>

<?


function trans($str)
{
    $str = (string)$str;
    $str = preg_replace("/\s+/", '_', $str);
    $str = mb_strtolower($str, 'UTF-8');
    $letter = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ж' => 'j', 'з' => 'z',
        'и' => 'i', 'й' => 'ii', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ce', 'ч' => 'ch', 'ш' => 'sh',
        'щ' => 'sch', 'ъ' => '\'', 'ы' => 'y', 'ь' => '6', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];
    $str = strtr($str, $letter);
    return $str;
}
echo ("<ul class=\"menu\">");
$m =array("<li><a href=\"index.html\"class=link>Главная&nbsp;&nbsp;</a></li>"=>array
	               ("<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>"),

	      "<li><a href=\"index.html\"class=link>Каталог&nbsp;&nbsp;</a></li>"=>array
	               ("<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>"),

	       "<li><a href=\"index.html\"class=link>О Нас&nbsp;&nbsp;</a></li>"=>array
	               ("<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>"),

	       "<li><a href=\"index.html\"class=link>Контакты&nbsp;&nbsp;</a></li>"=>array
	               ("<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href=\"index.html\" class=link>Пункт&nbsp;</a></li>",
               		"<li><a href\=\"index.html\" class=link>Пункт&nbsp;</a></li>"));
$i=0;
foreach (array_keys($m) as $value) {
	echo $value;
    echo ' <ul>';
    echo ' <br/>';
	foreach ($m[$value] as $key) {
         echo $key;
         $key++;
	}
	 echo ' </ul>';
	++$value;
}
echo ("</ul>");

echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';

while ($x++<100){
	if ($x%3==0)
	echo $x," ";
}

echo ' <br/>';

$x = 1;
do {
     echo $x;
     if ($x%2==0) echo "  - Четное число "; else echo "  - Нечетное число ";
     echo ' <br/>';
} while ($x++<10);

$x=0;
for ($x;$x<10;print $x++){
	echo ' <br/>';
}
echo ' <br/>';
$goroda = array(
	"Московская область"=>array ("Москва","Зеленоград","Клин"),
	"Ленинградская область"=> array  ("Санкт-Петербург","Павловск","Кронштадт"),
	"Рязанская область"=> array  ("Касимов","Кораблино","Рыбное")
);


foreach (array_keys($goroda) as $value) {
	echo $value;
	echo ' <br/>';
	foreach ($goroda[$value] as $key) {
         echo $key;
         echo ' <br/>';
         $key++;
	}
	$value++;
}

echo ' <hr/>';

foreach (array_keys($goroda) as $value) {
	echo $value;
	echo ' <br/>';
	foreach ($goroda[$value] as $key) {
		if (mb_substr($key,0,1,'UTF-8')=="К") echo $key, ' <br/>';
         $key++;
	}
	$value++;
}

echo ' <br/>';

echo trans("Привет как делаааа");
echo ' <br/>';

?>

