<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php


#               ______conditional operator_____



# -> types :-

#   ->  if Statement
#   ->  if-else Statement
#   ->  elseif Statement
#   ->  nested if-else Statement



/*

		-----------------if statement-------------------

      -> syntax :- 

         if (condition) {
 			statement ;
 			code to execute if condition is true
          }



*/


 echo "<br>----------------if statement -------------------<br><br> ";

# -> Example :- 

	$age = 15;

	if ($age < 18) {
	    echo "You are not yet an adult.";
	}



/*

		-----------------if-else statement-------------------

      -> syntax :- 

         if (condition) {
 			statement ;
 			code to execute if condition is true
          }else{
	        statement ;
 			code to execute if condition is true
          }



*/


 echo "<br><br>----------------if-else statement -------------------<br><br> ";

# -> Example :- 

	$age = 25;

	if ($age < 18) {
	    echo "You are not yet an adult.";
	} else {
	    echo "You are an adult.";
	}



/*

		-----------------elseif statement-------------------

      -> syntax :- 

			if (condition) {
			    // code to execute if condition is true
			} elseif (condition) {
			    // code to execute if the first condition is false and this condition is true
			} else {
			    // code to execute if all conditions are false
}

*/


 echo "<br><br>----------------elseif statement -------------------<br><br> ";

# -> Example :- 

	$age = 30;

	if ($age < 18) {
	    echo "You are not yet an adult.";
	} else if ($age >= 18 && $age < 65) {
	    echo "You are an adult.";
	} else {
	    echo "You are a senior citizen.";
	}


/*

		-----------------Switch_case statement-------------------

      -> syntax :- 

			switch (expression) {
			    case value1:
			        // code to execute if expression matches value1
			        break;
			    case value2:
			        // code to execute if expression matches value2
			        break;
			    .
			    .
			    .
			    case valueN:
			        // code to execute if expression matches valueN
			        break;
			    default:
			        // code to execute if none of the cases match expression
			}

}

*/


 echo "<br><br>----------------Switch_case statement -------------------<br><br> ";

# -> Example :- 

	 $dayOfWeek = "Tuesday";

	switch ($dayOfWeek) {
	    case "Monday":
	        echo "Today is Monday.";
	        break;
	    case "Tuesday":
	        echo "Today is Tuesday.";
	        break;
	    case "Wednesday":
	        echo "Today is Wednesday.";
	        break;
	    case "Thursday":
	        echo "Today is Thursday.";
	        break;
	    case "Friday":
	        echo "Today is Friday.";
	        break;
	    default:
	        echo "It's the weekend!";
	}



?>


<!--

1.Question: Write a PHP program to check whether a given number is even or odd.

solu:-

		
		$num = 10;

		if ($num % 2 == 0) {
		    echo $num . " is even.";
		} else {
		    echo $num . " is odd.";
		}
	

2.Question: Write a program that takes a number as input and checks whether it is positive, negative, or zero. Output "Positive" if the number is positive, "Negative" if the number is negative, and "Zero" if the number is zero

 sloun:-

		$num = 5; // change the value of $num to test the program

		if ($num > 0) {
		    echo "Positive";
		} elseif ($num < 0) {
		    echo "Negative";
		} else {
		    echo "Zero";
		}



3.Question: Write a program that takes 3 number and find the graeter number

solun:-

		$a = 10;
		$b = 15;
		$c = 5;

		if ($a > $b && $a > $c) {
		    echo "$a is the greatest number.";
		} elseif ($b > $a && $b > $c) {
		    echo "$b is the greatest number.";
		} else {
		    echo "$c is the greatest number.";
		}

-->



</body>
</html>