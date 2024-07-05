<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

  
  
#      ______Function userdefied_____

/*
  
   ->  Types :- 
         (1) Default function
         (2) Arguments(parameterized) function
         (3) Return_type function
         (4) reursive function


-----------------Default function-------------------

    -> Default function :-
        -> to create your own functions

        -> syntax :- 
           function functionName() {
			  code to be executed;
			}
*/

 echo "<br>----------------Default function-------------------<br><br> ";

   # -> Example :- 

			function samplexample(){
				echo "hello world";
			}

			samplexample();

/*


-----------------Arguments(parameterized) function-------------------

    -> Default function :-
        -> Information can be passed to functions through arguments. An argument is just like a variable.

        -> syntax :- 
           function function_name(parameter1, parameter2, ...) {
				  // function code goes here
				}


*/

 echo "<br><br>----------------Arguments(parameterized) function-------------------<br><br> ";
# -> Example:-

	     function add_numbers($num1, $num2) {
			  $sum = $num1 + $num2;
			  return $sum;
			}

         $result = add_numbers(5, 10);
		 echo $result; // Output: 15

/*

   -> PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
 -> Example:- 

		<?php
		function addNumbers(int $a, int $b) {
		  return $a + $b;
		}
		echo addNumbers(5, "5 days");
-> since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
*/
		
	?>

  ->To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

 -> Example:- 

         declare(strict_types=1); // strict requirement
		 function addNumbers(int $a, int $b) : ?float{
			  return $a + $b;
			}
		 echo addNumbers(5, "5 days");

-> since strict is enabled and "5 days" is not an integer, an error will be thrown
*/

echo "<br><br>----------------Default Argument Value function-------------------<br><br> ";

# -> Example:-

		declare(strict_types=1); // strict requirement
		function setHeight(int $minheight = 50) {
		  echo "The height is : $minheight <br>";
		}

		setHeight(350);
		setHeight(); // will use the default value of 50
		setHeight(135);
		setHeight(80);

# -> Example:-

		function greet($name = "World") {
		  echo "Hello, " . $name . "!";
		}

		greet(); // output: Hello, World!
		greet("John"); // output: Hello, John!

echo "<br><br>----------------Return Type Declarations function-------------------<br><br> ";

# -> To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

# -> Example:-

		declare(strict_types=1); // strict requirement
		function addNumbers(float $a, float $b) : float {
		  return $a + $b;
		}
		echo addNumbers(1.2, 5.2);

# -> Example:-

		declare(strict_types=1); // strict requirement
		function addNumbers(float $a, float $b) : int {
		  return (int)($a + $b);
		}
		echo addNumbers(1.2, 5.2);


echo "<br><br>----------------Passing Arguments by Reference function-------------------<br><br> ";

 # -> a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference.

# -> Example:-

		function update(&$x) {
		  $x += 5;
		}

		$num = 10;
		echo "num before update: " . $num . "<br>";
		update($num);
		echo "num after update: " . $num;	


echo "<br><br>----------------Passing Arguments by Reference function-------------------<br><br> ";

#-> a recursive function is a function that calls itself repeatedly until a certain condition is met

# -> Example:-

		function factorial($n) {
		  if ($n <= 1) {
		    return 1;
		  } else {
		    return $n * factorial($n - 1);
		  }
		}

		// calculate the factorial of 5
		echo "Factorial of 5 is " . factorial(5);


 ?>


</body>
</html>