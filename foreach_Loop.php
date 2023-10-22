<?php
echo "Welcome to the world of foreach loop <br>";
$arr= array("banana","apple","harpic","bread");
/* Using For Loop
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo "<br>";
}*/
//Using Foreach Loop
foreach ($arr as $value) {
    echo "$value <br>";
}

?>