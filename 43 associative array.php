<?php
     
    /* First method to associate create array. */
    $salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);
     
    echo "Salary of Roshan is ". $salaries['roshan'] . "<br>";
    echo "Salary of Twinkle is ".  $salaries['twinkle']. "<br>";
    echo "Salary of Zara is ".  $salaries['zara']. "<br>";
     
    /* Second method to create array. */
    $salaries['roshan'] = "high";
    $salaries['qadir'] = "medium";
    $salaries['twinkle'] = "low";
     
    echo "Salary of Roshan is ". $salaries['roshan'] . "<br>";
    echo "Salary of Qadir is ".  $salaries['qadir']. "<br>";
    echo "Salary of Twinkle is ".  $salaries['twinkle']. "<br>";
    echo "Program by Pravar,(PRN: 2220100239)";
?>