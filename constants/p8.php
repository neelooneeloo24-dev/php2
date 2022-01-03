 <?php
//wap in php to show constants are global inside class
define('GRAVITY',10);
printf("The value of GRAVITY at global scope: %d\n",GRAVITY);

$gravity=9.8;
printf("The value of gravity at global scope: %d\n",$gravity);

class Test{
private $g; //instance variable
private $G; //instance variable

public function __construct(){
$this->G=GRAVITY;
$this->g=$gravity;

printf("The value of GRAVITY inside method: %d\n",GRAVITY); //constant
printf("The value of gravity inside method: %d\n",$gravity); // 0 undefined varibale g
printf("The value of gravity using g for class: %d\n",$this->g); // 0undefined variable g
printf("The value of GRAVITY using G for class: %d\n",$this->G);//10

}
}
$test = new Test();

?>