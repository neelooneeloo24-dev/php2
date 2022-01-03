<?php
//wap in php to show constants are global

define('GRAVITY',10);
printf("The value of GRAVITY at global scope: %d\n",GRAVITY);

$gravity=9.8;
printf("The value of gravity at global scope: %d\n",GRAVITY);

function test(){
printf("The value of GRAVITY at local scope: %d\n",GRAVITY);
printf("The value of gravity at local scope: %d\n",$gravity);
}
test();


/*printf("**********START OF GLOBAL SCOPE***********");
define('friend','Salman');
printf("No one can, marry with %s\n",friend);
$villain='Vicky kaushal';
printf("The only villain in Salman life is: %s\n",villain);

printf("**********END OF GLOBAL SCOPE***********");

function test(){


printf("**********START OF LOCAL SCOPE***********");
printf("No one can, marry with %s\n",friend);

printf("The only villain in Salman life is: %s\n",villain);
printf("**********END OF LOCAL SCOPE***********");


}
test();
*/
