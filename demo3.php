<html>
<head>
<title>My First Web Page</title>
<body align=center><h1>

<?php
//This is a single comment
/* Multi-line comment */

//Equality and Inequality
$a = 2;
$b = 3;
$month = "December";

if($a==$b) echo "a is equal to b<br>";
if($month == "December") echo "It's Christmas time<br>";

if($a > $b) echo "a is greater than b<br>";
if($a < $b) echo "a is less than b<br>";
if($a >= $b) echo "a is greater than or equal to b<br>";
if($a <= $b) echo "a is less than or equal to b<br>";

$c = 1;
$d = 0;
echo ($c AND $d);
echo "<br>";
if($c OR $d)
{
	echo "one of the operands or both operands are TRUE";
}
echo "<br>";
echo ($c XOR $d);

//if-else statement
$bank_balance = 120;
$savings = 50;
if($bank_balance<100)
{
	$money = 1000;
	$bank_balance+=$money; //bank_balance = bank_balance + money
echo "<br>";
echo $bank_balance;
}
else 
{
	$savings +=50;
	$bank_balance-=50; //bank_balance - 50
	echo "<br> The savings is:".$savings;
	echo "<br> The bank balance is:".$bank_balance;
}
$page = "Home";
switch($page)
{
	case "Home":
	{
		echo "<br> You choose Home";
		break;
	}
	case "Login";
	{
		echo "You choose Login";
		break;
	}
	case "Links";
	{
		echo "You choose Links";
		break;
	}
	default:
	{
		echo "None of the choices is correct";
	}
$fuel = 1;
echo $fuel<=1? "Fill tank now": "There's enough fuel";
}
	
?>

</h1>
</body>
</head>
</html>
