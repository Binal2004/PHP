<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

  
#               ______Loop operator_____



# -> types :-

#   ->  while loop
#   ->  do while loop
#   ->  for loop
#   ->  foreach loop

   

/*

		-----------------while loop-------------------

      -> syntax :- 

         while (condition) {
            // code to be executed

			}


*/


 echo "<br>----------------while loop -------------------<br><br> ";

	# -> Example :- 

	$i = 1;

	while ($i <= 10) {
	    echo $i . "  ";
	    $i++;
	}

echo "<br>";
/*

		-----------------do-while loop-------------------

      -> syntax :- 

	        do {
	   		    // code to be executed
				
				} while (condition);



*/


 echo "<br>---------------- do-while loop -------------------<br><br> ";

	# -> Example :- 

	$i = 1;

		do {
		    echo $i . "  ";
		    $i++;
		} while ($i <= 10);


echo "<br>";

/*

		-----------------for loop-------------------

      -> syntax :- 
						start           stop         step
	        for (initialization; condition; increment/decrement) {
					    // code to be executed
					}


*/


 echo "<br>----------------for loop -------------------<br><br> ";

	# -> Example :- 

		for ($i = 1; $i <= 10; $i++) {
		    echo $i . "   ";
		}


echo "<br>";


/*

  ->after array -> we will do

		-----------------foreach loop-------------------
     
      ->  The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

      -> syntax :- 

				foreach ($array as $value) {
				  code to be executed;
				}


*/

 echo "<br>----------------foreach loop -------------------<br><br> ";

	# -> Example :- 

     $color = array("red","blue","green","while");

     foreach($color as $value){
         echo "$value <br>";
     }
  
  # -> Example2 :- 

   $age = array("computer"=>23,"mouse"=>4,"moniter"=>32);

   foreach ($age as $key => $value) {
   	 echo "$key =  $value <br>";
		   }

  # -> Example3 :- 

		$products = array(
		    array("name" => "Product A", "price" => 10),
		    array("name" => "Product B", "price" => 20),
		    array("name" => "Product C", "price" => 30)
		);

		foreach ($products as $product) {
		    echo $product["name"] . " - $" . $product["price"] . "<br>";
		}


?>	





<!-- 

-------------------------question set on loops -----------------------


1.Program to print the first 10 even numbers using a while loop:
2.Program to print the first 10 odd numbers using a for loop:
3.Program to find the sum of the first 10 natural numbers using a while loop:
4.Program to calculate the factorial of a number using a for loop:
5.Program to print the multiplication table of a number using a while loop:
6.Program to find the sum of the digits of a number using a for loop:
7.Program to print the reverse of a number using a for loop:



 -->

</body>
</html>