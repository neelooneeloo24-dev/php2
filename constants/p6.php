<?php
//wap in php to show difference between pre-defined error level and user-defined error level
error_reporting(E_USER_NOTICE);
printf("The value of true : %d\n",true);
printf("The value of TRUE : %d\n",TRUE);
printf("true is incase-sensitive constant : %d\n",(TRUE==1));
define('true',10,1);
printf("The value of true after redeclaration: %d\n",true);
printf("The value of TRUE after redeclaration: %d\n",TRUE);


