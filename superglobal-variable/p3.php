<?php
//wap to find the sum  and average of all the arguments supplied from command line.
$avg=0;
$sum=0;
for($i=1;$i<$argc;$i++)
{

$sum=$sum+$argv[$i];
$avg=$sum/($argc-1);

}
//echo $sum;
printf("The sum =%d\n",$sum);
echo PHP_EOL;
echo $avg;

?>