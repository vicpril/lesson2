<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);

//Задание 1:
$name = 'Виктор';
$age = 26;
echo 'Меня зовут '.$name.'. Мне '.$age.' лет';
unset($name, $age);
//конец Задания 1

//Задание 2
define('CITY', 'Novosibirsk');
if (defined('CITY')){
    echo "<br>".CITY;
}
define('CITY', 'Barnaul');                      //попытался изменить константу
echo "<br>New constant - ".CITY;                //проверил, что не константа не поменялась
//конец Задания 2

//Задание 3
$book = array();
$book ['title'] = 'Forrest Gump';
$book ['author'] = 'Winston Groom';
$book ['pages'] = 336;
echo "<br>Недавно я прочитал книгу {$book['title']}, написанную автором {$book['author']}, я осилил все {$book['pages']} страниц, мне она очень понравилась.";
//конец Задания 3

//Задание 4
$book1 ['title'] = 'Forrest Gump';
$book1 ['author'] = 'Winston Groom';
$book1 ['pages'] = 336;

$book2 ['title'] = 'Изучаем C#';
$book2 ['author'] = 'Эндрю Стиллмен';
$book2 ['pages'] = 689;

$books = [$book1,$book2];

echo "<br>Недавно я прочитал книги '{$books[0]['title']}' и '{$books[1]['title']}',"
        . " написанные соответственно авторами {$books[0]['author']} и {$books[1]['author']},"
        . " я осилил в сумме ".($books[0]['pages']+$books[1]['pages'])." страниц, не ожидал от себя подобного.";

//конец Задания 4

?>
