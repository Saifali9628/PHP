<?php
$name ="SAif";
echo $name;
echo"<br>";

echo "The length of " . "my string is " . strlen($name);
echo"<br>";
echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strpos($name,"is"); //For Searching 
echo"<br>";
echo str_replace("Saif","sahil",$name);  //For Replace
echo"<br>";
echo str_repeat($name,134); // for Repeat
echo"<br>";
echo rtrim("<pre>  this is a good boy </pre> "); #remove space right side 
echo"<br>";
echo ltrim("<pre>  this is a good boy </pre> "); #remove space left side
echo"<br>";

?>