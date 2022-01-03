<?php
//wap in php to check an array is homogenous / hetrogenous
//wap in php to show $argv is always homogenous
//print_r($argv);
function is_homo($array=[])
{
	$key_type=getType($array[0]);
	//echo $key_type;	
	for($i=0;$i<count($array);$i++){
		//echo getType($array[$i]);
		//echo PHP_EOL;
	if($key_type===getType($array[$i]))
	{
	}else{
		return false;	
	 }
	}
		return true;
}
var_dump(is_homo($argv));
var_dump(is_homo(["Salman khan","Vijay","Siddhartha"]));
var_dump(is_homo(["Hello",10,true,56/3]));


?>
