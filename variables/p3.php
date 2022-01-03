<?php
//wap in php to boolean datatype stored in variable

$x=true;// non case sensitive
echo $x;//1
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(true)
echo PHP_EOL;

$x=TRUE;
echo $x;//1
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(true)
echo PHP_EOL;

$x=TrUe;
echo $x;//1
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(true)
echo PHP_EOL;

echo 'On comparing all the three values';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true);
echo PHP_EOL;

?>





