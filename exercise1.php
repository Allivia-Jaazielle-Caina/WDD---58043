<html>
<body style="background-color:#bfe8ff">
<h1 align ="center">GRADING SYSTEM</h1>

<?php
$grade1 = 70;

if ($grade1 >= 70) 
{
	echo $grade1; echo " = PASSED! <br>";
} 
elseif ($grade1 < 60) 
{
	echo "FAILED";
} 
else 
{
	echo "REMEDIAL";
}

$grade2 = 60;

if ($grade2 >= 70) 
{
	echo $grade2; echo " = PASSED";
} 
elseif ($grade2 < 60) 
{
	echo $grade2; echo " = FAILED ";
} 
else 
{
	echo $grade2; echo " = REMEDIAL <br>";
}

$grade3 = 50;

if ($grade3 >= 70) 
{
	echo $grade3; echo " = PASSED!";
} 
elseif ($grade3 < 60) 
{
	echo $grade3; echo " = FAILED";
} 
else 
{
	echo $grade3; echo " = REMEDIAL";
}
?>
</body>
</html>