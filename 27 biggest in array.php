<?php
$arr = array(4, 8, 3, 6, 9);
$largest = $arr[0];
for ($i=0; $i<count($arr); $i++)
{ 
    if($arr[$i] > $largest){
        $largest = $arr[$i];

    }
}
echo"largest number is: ". $largest;
echo "<br>";
echo "Program by Pravar, (PRN:2220100239)";
?>
