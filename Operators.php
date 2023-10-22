<?php 
//  Operators in PHP

// 1- Arithemtic Operators
$a = 45;
$b = 20;
echo "For + ,the result is ".($a+$b). "<br>";
echo "For - ,the result is ".($a-$b). "<br>";
echo "For * ,the result is ".($a*$b). "<br>";
echo "For % ,the result is ".($a%$b). "<br>";
echo "For **,the result is ".($a**$b). "<br>";
// 2-Assignment Operators
$x=$a;
echo "for a,the value is ".$x."<br>";

$a +=6;
echo "for a,the value is ".$a."<br>";
$a -=6;
echo "for a,the value is ".$a."<br>";
$a *=6;
echo "for a,the value is ".$a."<br>";
$a %=6;
echo "for a,the value is ".$a."<br>";
$a /=6;
echo "for a,the value is ".$a."<br>";
// 3-Comparison Operators
$x= 7;
$y =9;
echo"For x==y, the result is "; 
echo var_dump($x==$y)."<br>";
echo"For x>y, the result is "; 
echo var_dump($x>$y)."<br>";
echo"For x>=y, the result is "; 
echo var_dump($x>=$y)."<br>";
echo"For x<=y, the result is "; 
echo var_dump($x<=$y)."<br>";
echo "<br>";

// 4-Logical Operators
$m= true;
$n= false;
echo "For m and n the result is ";
echo var_dump($m and $n);
echo "<br>";
echo "For m and n the result is ";
echo var_dump($m or $n);
echo "<br>";
// and as &&
// or as ||
// not as !
echo "For !m and n the result is ";
echo var_dump(!$m);
echo "<br>";


?>