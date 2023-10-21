<?php
// $name ="harry"; //string
// $income =200;  //integer

/* php data types
1. String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.Null
*/
$name ="Saif";
$friend="Mohsin";
echo "My name is $name  and my friend's name is $friend";

// Integer -Non decimal Number
echo"<br>";
$income= 665;
$debts =-785;
echo $income;
echo"<br>";
echo $debts;
echo"<br>";
// Float- Decimal point Number
$income =344.5;
$debts=-45.5;
echo $income;

echo"<br>";
echo $debts;

// Boolean- Can be either True of False
echo"<br>";
$is_Friend = true ;
$x =false;
echo var_dump ($x);
echo"<br>";
echo var_dump($is_Friend);

// Object -Instances of classes 
// Employee is a class ---> saif can be  one object

// Array- used to store multiple values in a single variable 
$Friends =array("rohan","subham","Skillf","larry");
echo var_dump($Friends);
echo $Friends[0];
echo"<br>";
echo $Friends[1];
echo"<br>";
echo $Friends[2];
echo"<br>";
echo $Friends[3];
echo"<br>";

// echo $Friends[4]; Will throw an error as the size of array is 4

// Null 
$name =NULL;
echo var_dump($name);

?>
