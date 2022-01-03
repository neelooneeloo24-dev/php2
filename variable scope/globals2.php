<?php
//wap in php to show super global power
$GLOBALS['A']=100;
$GLOBALS['A']=200;

function display(){
echo $GLOBALS['A'];
echo PHP_EOL;
echo $GLOBALS['B'];
echo PHP_EOL;

$A=$GLOBALS['A'];
$B=$GLOBALS['B'];
echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;

global $A,$B;
echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;

extract($GLOBALS)
echo $A;
echo PHP_EOL;
echo $B;




