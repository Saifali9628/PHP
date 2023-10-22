<?php
echo "While loop in  php <br>";

$i=0;
while ($i <5){
    echo"the value is i is";
    echo $i+1;
    echo"<br>";
    $i++;
}
$x=9;
while($i<5000 && $x<60){
    echo"the value is x is";
    echo $i+1;
    echo "<br>";
    $i+=3;
    $x+=4;
}

?>