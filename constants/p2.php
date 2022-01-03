<?php
//wap in php to show sensitive constants
define('gravity',10);//lowercase
define('GRAVITY',9.8);//uppercase
define('Gravity','Free Fall');//capatilized
define('GrAvIty','It is Gravity');//mixed
echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAvIty;
echo PHP_EOL;

