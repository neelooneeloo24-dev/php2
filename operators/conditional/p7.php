<?php
//wap in php to find perfect number using recursion and ternary operator
$n=readline("Enter any number: ");

 $num=(is_perfect($n))?"$n is perfect number":"$n is not perfect number";
 echo $num;

function is_perfect($n,$i=1,$sum=0)
{
	
	if($i==$n){
		return false;
	}
	else{
		if($n%$i==0)
		{
			$sum=$sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}	
}
 ?>