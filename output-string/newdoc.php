<?php
//wap in php to show new doc string
$a=100;
echo <<<'BLOCK'
this is new Doc string, $a \n
	"This is again new line of string "$a""
'This string is inside \$a single quotes \t tabbled'=$a
BLOCK;

$a=100;
$code = <<<'BLOCK'
this is HereDoc string, $a \n
	"This is again new line of string "$a""
'This string is inside \$a single quotes \t tabbled'=$a
BLOCK;
echo $code;
