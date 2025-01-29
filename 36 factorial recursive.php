<?php
function factorial($num)
{
	if($num == 0 || $num == 1)
	{
		return 1;
	}
	else
	{
		return $num *factorial($num -1);
	}

}
$f = Factorial(5);
echo $f;
echo"<br>";
echo"Program by Pravar,(PRN:2220100239)";

?>