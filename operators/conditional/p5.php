<?php
//wap 
$a=readline('Enter a number: ');
$sum=0;
for($i=1;$i<$a;$i=$i+1)
{
if($a%$i==0){
$sum=$sum+$i;
}
}
$res=($sum==$a)?"No is perfect":"No is not perfect";
echo $res;
