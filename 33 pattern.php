<?php
$rows = 8;

for ($i = $rows; $i > 0; $i--) {
    // Loop to print stars in each row
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
echo "Program by Pravar, (PRN:2220100239)";
?>