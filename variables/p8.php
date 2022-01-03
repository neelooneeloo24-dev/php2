<?php
//wap in php to show nullable datatype
$x=null;//it does not exist at all;
echo $x;
echo PHP_EOL;
var_dump($x);
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));
var_dump($x==null);
var_dump($x===null);
var_dump(''==null);
var_dump(''===null);

echo 'very important';
$y='';
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
var_dump(isset($x));
var_dump(isset($w));
var_dump(empty($x));
var_dump($w); //NULL--->no memory allocation
var_dump($x);

