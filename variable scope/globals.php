<?php
//wap in php to show superglobal values
$a=20;
$b=30;
print_r($GLOBALS);

function display(){
$a=100;
$b=200;
echo "The value of a from local: $a";
echo PHP_EOL;
echo "The value of b from local: $b";
echo PHP_EOL;

echo "The value of a from global using SG:{$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of b from global using SG:{$GLOBALS['b']}";
echo PHP_EOL;

$a=$GLOBALS['a'];//without using global keyword
$b=$GLOBALS['b'];//without using global keyword
echo "the value of a from global without global keyword: $a";
echo PHP_EOL;
echo "the value of b from global without global keyword: $b";
echo PHP_EOL;

global $a,$b;//using global keyword
echo PHP_EOL;
echo "The value of a from global with using global keyword: $a";//20
echo PHP_EOL;
echo "The value of b from global with using global keyword: $b";//30
echo PHP_EOL;

}
display();