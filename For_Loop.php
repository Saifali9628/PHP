<?php
echo "This is for loop in action";
echo "<br>";
for($i=1; $i<5;$i++){
    // for(initilization,condition,updation)
    echo "The Numer is $i<br>";
}
// Avoid running into is_infinite loop 
for($i=0;$i<87;){
    echo $i;

    echo"For loop is Ended";
}
?>