<?php
//wap in php to show var-to-var reference
$x='10';//normal variable
echo $x;
echo PHP_EOL;
$y='Ravi';
echo $y;
echo PHP_EOL;
$Ravi=50;
echo $Ravi;
echo PHP_EOL;

$z='Neeloo';
$$z=100;
printf("The value of Neeloo = %s\n",$Neeloo);
echo PHP_EOL;

$w='_1000';
$$w='Dolly';
printf("The value of w =%s\n",$w);
printf("The value of dolly =%s\n",$$w);
printf("The value of _1000=%s\n",$_1000);
echo PHP_EOL;

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;
echo PHP_EOL;

$student['name']='Arzoo';
$student['class']='Diploma';

foreach($student as $key=> $value){
	$$key=$value;
	printf("%s : %s\n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;
echo PHP_EOL;

echo 'Without using variable to variable reference';
echo PHP_EOL;

$car['name']='Maruti';
$car['class']='A class';
$car['price']='5.5 lakhs';

extract($car);

printf("The name of car:%s \n",$name);
printf("The class of car:%s \n",$class);
printf("The price of car:%s \n",$price);
