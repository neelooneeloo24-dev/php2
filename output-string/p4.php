<?php
//wap in php to show difference b/w raw and processed in the combination.
//escape character sequence
#echo '''';
#echo """";

echo 'The line is \n new line and "\t double tabbled" ';
echo PHP_EOL;
echo "The line is \n new line and '\t double tabbled' ";
echo PHP_EOL;

//with variable
$a=100;
echo 'The value of $a is: "$a"';
echo PHP_EOL;
//echo "The value of ${a} is: '$a'";//zinger/complex curli/string interpolation
echo "The value of \$a is: '$a'";
echo PHP_EOL;
echo 'The value of $a is: '.$a;
echo PHP_EOL;
echo 'The value of $a is: "'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is: '."'$a'";
echo PHP_EOL;

