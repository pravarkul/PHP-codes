<?php
$marks = array( 
    "Java" => 80, 
    "C#" => 85, 
    "Python" => 95, 
    "PHP" => 98, 
    "HTML" => 88 
);

$total = array_sum($marks); 
$total_subject = count($marks); 
$total_possible_marks = $total_subject * 100; 
$percentage = ($total / $total_possible_marks) * 100;
?>
<html>
<head>
    <title>Marks and Percentage</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th>S.No</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>

        <?php
        $serial_no = 1;
        foreach ($marks as $subject => $mark) {
            echo "<tr><td>$serial_no</td><td>$subject</td><td>$mark</td></tr>";
            $serial_no++;
        }
        ?>

        <tr>
            <td><td><strong>Total Marks</strong></td></td>
            <td><?php echo $total; ?></td>
        </tr>
        <tr>
            <td><td><strong>Percentage</strong></td></td>
            <td><?php echo number_format($percentage, 2) . '%'; ?></td>
        </tr>
    </table>

    <p style="text-align: center;">Program by Pravar (PRN: 2220100239)</p>

</body>
</html>
