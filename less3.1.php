<?php
/*
    1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
*/

$i=0;
$list = "<ul>";
while($i<=100){
    if( ($i % 3) == 0 ){
        $list = $list."<li>$i</li>";
    }
    $i++;
}
$list .= "</ul>";
echo $list;