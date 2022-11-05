<html>
   
   <head>
      <title>Long Quiz</title>
   </head>
   
   <body>
   <h2> Problem 1 </h2>
	<?php
         $Salary_Rate = 600;
         $Salary = 0;
		 $Taxable_Amount = 0;
		 $Net_Pay = 0;
         
		 echo "Salary Rate: $Salary_Rate"."/per day <br>";
         $Salary = $Salary_Rate*15;
         echo "Salary: $Salary "."for 15 days<br>";
         
         $Taxable_Amount = $Salary*.30;
         echo "TaxableAmount: $Taxable_Amount<br>";
         
         $Net_Pay = $Salary - $Taxable_Amount;
         echo "Net Pay: $Net_Pay<br>";
     ?>
	<h2>Problem 2 </h2>
	<?php
		$n = 50;
		$i = 1;
		$sum = 0;

		//sum of positive integers from 1 to 50
		while($i <= $n) {
		$sum += $i;
		$i++;
		}

		echo "Sum of all positive integers from 1 to 50: $sum";

	?>
   
   </body>
</html>