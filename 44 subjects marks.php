<?php
$marks=array
(
"Java" => 80,
"C#"=> 85,
"Python" => 95,
"PHP" => 98,
"HTML" => 88
);

$total = array_sum($marks);

$total_subject = count($marks);
$total_possible_marks = $total_subject *100;
$percentage = ($total/$total_possible_marks)*100;
echo"Total marks: ".$total ."<br>";
echo"Percentage: ".number_format($percentage,2)."%<br>";
echo "Program by Pravar,(PRN: 2220100239)<br>";
?>
