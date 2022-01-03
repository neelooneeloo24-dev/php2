<?php
//wap in php to show, floating point numbers
$x=0010;//octal
echo $x; 
echo PHP_EOL;
$x=-0010;
echo $x;

echo PHP_EOL;
$y=011;
#$a=08; //invalid numerical literal(conversation to octal range not possible) 
echo $y;
echo PHP_EOL;
#echo $a;
$b=10.5;
echo $b;
echo PHP_EOL;
echo gettype($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c=10.0000;
echo $c;
echo PHP_EOL;
echo gettype($b);
echo PHP_EOL;
var_dump($c);
echo PHP_EOL;

$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);
echo PHP_EOL;

$e=0.5;
echo $e;
echo PHP_EOL;
echo gettype($e);
echo PHP_EOL;
var_dump($e);

$e=.5;
echo $e;
echo PHP_EOL;
echo gettype($e);
echo PHP_EOL;
var_dump($e);
echo PHP_EOL;

$p='a';
$p.=$e;
echo $p;
echo PHP_EOL;
echo gettype($p);
echo PHP_EOL;
var_dump($p);
echo PHP_EOL;

$marks=9.99999999999999;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);
echo PHP_EOL;

$m=9.55555555555555;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;

$m=9.55555555555545;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;

$m=3.55555555555535;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;

$m=8.55555555555565;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;

$n=9.939999;//within the range
echo $n;
echo PHP_EOL;
echo gettype($n);
echo PHP_EOL;
var_dump($n);
echo PHP_EOL;
printf("%.2f",$n);
echo PHP_EOL;

$m=9.5355;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
printf("%.2f",$m);
echo PHP_EOL;
//printf("%s",$marks);



?>