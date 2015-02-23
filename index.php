<?php
header('Content-type: text/html; charset=utf-8');

//Задание 1:
$name = 'Виктор';
$age = 26;
echo 'Меня зовут '.$name.'. Мне '.$age.' лет';
unset($name, $age);

//конец Задания 1

//Задание 2
define('city', 'Novosibirsk');
var_dump(city);
echo city;

//city = 'Barnaul';         //попытался изменить константу

//конец Задания 2

//Задание 3
$books = array();
$books ['title'] = 'Forrest Gump';
$books ['author'] = 'Winston Groom';
$books ['pages'] = 336;
echo "<pre>Недавно я прочитал книгу $books[title], написанную автором $books[author], я осилил все $books[pages] страниц, мне она очень понравилась.\n";
unset($books);
//конец Задания 3

//Задание 4
//$books = array();
//$books[] = $book1 = array();
//$books[] = $book2 = array();

$book1 ['title'] = 'Forrest Gump';
$book1 ['author'] = 'Winston Groom';
$book1 ['pages'] = 336;

$book2 ['title'] = 'Изучаем C#';
$book2 ['author'] = 'Эндрю Стиллмен';
$book2 ['pages'] = 689;

$books = [$book1,$book2];

echo "<pre>Недавно я прочитал книги '{$books[0]['title']}' и '{$books[1]['title']}',"
        . " написанные соответственно авторами {$books[0]['author']} и {$books[1]['author']},"
        . " я осилил в сумме ".($books[0]['pages']+$books[1]['pages'])." страниц, не ожидал от себя подобного.\n";

//конец Задания 4

?>
