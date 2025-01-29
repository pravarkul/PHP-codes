<?php
$num = 153;
function isArmstrong($number){
$originalNumber = $number;
$digits = strlen((string)$number);
$sum = 0;
while($number > 0){
$digit = $number % 10;
$sum += pow($digit,$digits);
$number= (int)($number / 10);
}
if($sum == $originalNumber){
echo $originalNumber. " is an Armstrong number";
}else{
echo $originalNumber. " is not an Armstrong number";
}
}
isArmstrong($num);
echo"<br>";
echo"Program by Pravar,(PRN: 2220100239)";
?>