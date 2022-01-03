<?php
//wap in php to show total predefined constants in php
$count=count(get_defined_constants());
printf("The total constants=%d",$count);//1872

print_r(get_defined_constants());
