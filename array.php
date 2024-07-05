<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

# ->      _____________________ Array  ___________________

# -> an array is a data structure that can hold multiple values of different types in a single variable.

/*
       -> arrays can be defined using several different syntaxes :-

          -> (1) Using the array() function:

               $fruits = array("apple", "banana", "orange");

          -> (2) Using the square bracket shorthand notation :-

               $fruits = ["apple", "banana", "orange"];

          -> (3) Defining an empty array and adding elements later :- 
          
                $fruits = [];
		     	$fruits[] = "apple";
				$fruits[] = "banana";
				$fruits[] = "orange"; 

          -> (4) Defining an associative array :- 

		          $person = [
					  "name" => "John",
					  "age" => 30,
					  "gender" => "male"
					];

-> In the associative array syntax, the keys are specified using the => operator, and the values are separated by commas.	


 ->  Array Types :- 

		-> (1) Indexed arrays - Arrays with a numeric index
		-> (2) Associative arrays - Arrays with named keys
		-> (3) Multidimensional arrays - Arrays containing one or more arrays
		  

*/

 echo "<br>----------------Array-------------------<br><br> ";
	
# -> Example :- 

		// create an array()
		$fruits = array("apple", "banana", "orange");

		//Using the square bracket shorthand notation
		$fruits = ["apple", "banana", "orange"];

		// access array elements
		echo "I like " . $fruits[0] . ", " . $fruits[1] . ", and " . $fruits[2] . ".";

		// add an element to the end of the array
		$fruits[] = "grape";

		// loop through the array
		foreach ($fruits as $fruit) {
		  echo $fruit . "<br>";
		}


/*

      --------------------------Indexed arrays------------------------

   -> There are two ways to create indexed arrays

   -> (1)  $cars = array("Volvo", "BMW", "Toyota"); <- this is automatically

   -> (2) the index can be assigned manually:

			$cars[0] = "Volvo";
			$cars[1] = "BMW";
			$cars[2] = "Toyota";



*/

echo "<br>----------------Indexed Array-------------------<br><br> ";

# -> Example :- 

		$cars = array("Volvo", "BMW", "Toyota");
		$arrlength = count($cars);

		for($x = 0; $x < $arrlength; $x++) {
		  echo $cars[$x];
		  echo "<br>";
		}

  # -> The count() function is used to return the length of an array


/*

      --------------------------Associative Arrays------------------------

-> Associative arrays are arrays that use named keys that you assign to them.
-> There are two ways to create associative array

   -> (1)  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); <- this is automatically

   -> (2) the index can be assigned manually:

			$age['Peter'] = "35";
			$age['Ben'] = "37";
			$age['Joe'] = "43";



*/

echo "<br>----------------Associative Arrays-------------------<br><br> ";

# -> Example :- 

			$person = array(
			  "name" => "John",
			  "age" => 30,
			  "gender" => "male"
			);

		   echo $person["name"]; // output: John
         # -> here to print by there key value.


         # -> associative array using a foreach loop

		foreach ($person as $key => $value) {
		  echo $key . ": " . $value . "<br>";
		}



/*

      --------------------------Multidimensional Arrays------------------------

-> A multidimensional array is an array containing one or more arrays.
  -> Syntax :- 
		 
		 ->	 $matrix = array(
			  array(1, 2, 3),
			  array(4, 5, 6),
			  array(7, 8, 9)
			);

		->	$matrix = [
			  [1, 2, 3],
			  [4, 5, 6],
			  [7, 8, 9]
			];


			Name	 Stock	  	Sold 

			Volvo	22			18
			BMW	    15			13
			Saab	5	        2
			Land Rover	17	    15

*/

echo "<br>----------------Multidimensional Arrays-------------------<br><br> ";

# -> Example :- 

	$cars = array (
	  array("Volvo",22,18),
	  array("BMW",15,13),
	  array("Saab",5,2),
	  array("Land Rover",17,15)
	);

	echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


# -> Example :-

	for ($row = 0; $row < 4; $row++) {
	  echo "<p><b>Row number $row</b></p>";
	  echo "<ul>";
		  for ($col = 0; $col < 3; $col++) {
		    echo "<li>".$cars[$row][$col]."</li>";
		  }
		  echo "</ul>";
	}


/* ----------------Arrays Function-------------------

# -> count(): Returns the number of elements in an array.

	$numbers = [1, 2, 3, 4, 5];
	$count = count($numbers); // $count = 5

# -> sort(): Sorts an array in ascending order.

	$numbers = [5, 4, 3, 2, 1];
	sort($numbers);
	print_r($numbers); // output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

# -> rsort() - sorts an array in descending order.

	rsort($fruits); // $fruits = ["pineapple", "pear", "orange", "grape", "banana"]

# -> array_push(): Adds one or more elements to the end of an array.

	$fruits = ["apple", "banana"];
	array_push($fruits, "orange", "grape");
	print_r($fruits); // output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )


# -> array_pop(): Removes the last element from an array and returns it.

	$fruits = ["apple", "banana", "orange", "grape"];
	$last_fruit = array_pop($fruits); // $last_fruit = "grape", $fruits = ["apple", "banana", "orange"]


# -> array_merge(): Combines two or more arrays into a single array.

	$fruits1 = ["apple", "banana"];
	$fruits2 = ["orange", "grape"];
	$all_fruits = array_merge($fruits1, $fruits2);
	print_r($all_fruits); // output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )

# -> array_slice(): Returns a slice of an array.

	$numbers = [1, 2, 3, 4, 5];
	$slice = array_slice($numbers, 2, 2); // $slice = [3, 4]

# -> array_search(): Searches an array for a given value and returns the corresponding key if found.

	$fruits = ["apple", "banana", "orange", "grape"];
	$key = array_search("orange", $fruits); // $key = 2

# -> in_array() - checks if a value exists in an array.

	$found = in_array("banana", $fruits); // $found = true

# -> array_shift() - removes the first element from an array and returns it.

    $first_fruit = array_shift($fruits); // $first_fruit = "apple", $fruits = ["banana", "orange", "pear"]

# -> array_unshift() - adds one or more elements to the beginning of an array.

	array_unshift($fruits, "grape", "pineapple"); 
	    // $fruits = ["grape", "pineapple", "banana", "orange", "pear"]
# -> 


*/

?>

</body>
</html>