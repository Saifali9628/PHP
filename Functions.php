<?Php
echo "Welcome to Functions";
function processMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum +=  $value;

    }
    return $sum;
}

function avgMarks($marksArr){
    $sum=0;
    $i=1;
    foreach($marksArr as $value){
        $sum +=  $value;
        $i++;

    }
    return $sum/$i;
}
$rohanDas =[34,98,45,12,98,93];
$sumMarks = processMarks($rohanDas);
echo "Sum of Marks is:".$sumMarks;
echo"<br>";

$saif =[99,98,75,94,88,75];
$sumSaif = processMarks($saif);
echo "<br> Sum of Saif's marks is :". $sumSaif;
echo"<br>";

$rohanDas =[34,98,45,12,98,93];
$sumMarks = avgMarks($rohanDas);
echo "Sum of Marks is:".$sumMarks;
echo"<br>";

$saif =[99,98,75,94,88,75];
$sumSaif = avgMarks($saif);
echo "<br> Sum of Saif's marks is :". $sumSaif;
echo"<br>";
?>