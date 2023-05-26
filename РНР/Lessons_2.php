<?php
 echo "<b>Hello</b>, World";
 echo "<br>\"";
 echo '<br>\"';
 //Comment
 #Comment
 /*
  Comment
 df
 */
echo "<br>";
$testNumber = 5;
echo $testNumber;
echo "<br>";

$testNumber = 45;
$testNumber2 = -0.55;

echo "<br>";
echo "Переменная ".$testNumber." ".$testNumber2. "<br>";

$a=0.5;
$b="0.5";
echo $a+$b."<br>";# Типы разные, вот и выделяет
echo $a+intval($b)."<br>";
echo $a+floatval($b)."<br>"."<br>";

define("TEST_NUM", 24);
echo TEST_NUM. "<br>";

define("FOO",     "что-то");
echo FOO. "<br>";