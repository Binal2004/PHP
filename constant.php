<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

 <?php 

# constant -> Constants are like variables except that once they are defined they cannot be changed or undefined.

#               ______constant method's_____


# -> create a constant you have use define() function 
#  syntax ->  define(name,value,case-in-sensitive)
 
  define("GREEING","welcome to raj computer ?");
  echo "<br>".GREEING;



# -> Now Php constant __ ARRAY __
  # you can create an array constant using the defined function's

  define("PARTS",["computer","mouse","moniter","cou-case"]);
  echo "<br>".PARTS[0];


# -> constant are automatically globel you can use it entire script(program)
  # Example :- 

  define("VALUE","computer is a collection of lets and logics.");
  function mytest(){
  	echo "<br>".VALUE;
  }

  mytest();


# operators -> operators are used to perform operation on variable or values.
 #                 ________operators______

/*
  -> arithmetic operator 
     -> +, -, *, /, //, **
     -> / :- division  
      __2.5____  <- ans
     2) 5
      - 4
      -----
        10
        10
       -----
         00  
     
     -> % :- modulus  
     -> 2 % 5 = 1
      __2____  <- ans
     2) 5
      - 4
      -----
        1  <- remainder

*/


 echo "<br><br>----------------arithmatic operator -------------------<br> ";

 
 $num1 = 5;
 $num2 = 5;

 echo "<br> addition of 2 number :- ".($num1+$num2) ;
 echo "<br> subtraction of 2 number :- ".($num1-$num2) ;
 echo "<br> multiplication of 2 number :- ".($num1*$num2) ;
 echo "<br> division of 2 number :- ".($num1/$num2) ;
 echo "<br> modulus of 2 number :- ".($num1%$num2) ;
 echo "<br> exponential of 2 number :- ".($num1**$num2) ;


   

/*

  ->  Comparison operator || relational operator 
    ->  < lessthan operator
    ->  < greaterthan operator
    ->  <= lessthan equal operator
    ->  >= graeterthan equal operator
    ->  != not equal operator
    ->  == equal operator
    ->  === equal to and type operator
    ->  !== not equal to and type operator
*/



 echo "<br><br>----------------relational operator -------------------<br> ";

 
 $num3 = 6;
 $num4 = 5;

 echo "<br> lessthan  of 2 number :- ",var_dump($num3<$num4) ;
 echo "<br> greaterthan of 2 number :- ",var_dump($num3>$num4) ;
 echo "<br> lessthan equal of 2 number :- ",var_dump($num3<=$num4) ;
 echo "<br> greaterthan equal of 2 number :- ",var_dump($num3>=$num4) ;
 echo "<br> not equal of 2 number :- ",var_dump($num3!=$num4) ;
 echo "<br> equal to of 2 number :- ",var_dump($num3==$num4) ;
    $num3 = '6';
 echo "<br> equal to and type of 2 number :- ",var_dump($num3===$num4) ;
 echo "<br> not equal and typeof 2 number :- ",var_dump($num3!==$num4) ;



/*    

 -> logical operator
    -> && - And operator 
    -> || - Or operator 
    -> !   not operator 

*/



   
 echo "<br><br>----------------logical operator -------------------<br> ";

 $num5 = 87;
 $num6 = 6;

 echo "<br> &&  of 2 number :- ",var_dump(($num5>$num6) && ($num5!=$num6)) ;
 echo "<br> || of 2 number :- ",var_dump(($num5<$num6) || ($num5>=$num6)) ;
 echo "<br> ! equal of 2 number :- ",var_dump(!($num5<$num6)) ;
 echo "<br> And  of 2 number :- ",var_dump(($num5>$num6) And ($num5!=$num6)) ;
 echo "<br> Or of 2 number :- ",var_dump(($num5<$num6) OR ($num5>=$num6)) ;



/*    

 -> Assignment Operators 
    -> += plus equal to operator
    -> -= minus equal to operator
    -> *= Multiplication equal to operator
    -> /= division equal to operator
    -> %= modulus equal to operator
    -> **= exponential equal to operator


*/


   
 echo "<br><br>---------------- Assignment operator -------------------<br> ";


 $num7 = 5;
 $num8 = 10;

 echo "<br> addition equal of 2 number :- ".($num7+=$num8) ;  // num7 = num7 + num8
 echo "<br> subtraction equal of 2 number :- ".($num7-=$num8) ;  // num7 = num7 - num8
 echo "<br> multiplication equal of 2 number :- ".($num7*=$num8) ;  // num7 = num7 * num8
 echo "<br> division equal of 2 number :- ".($num7/=$num8) ;  // num7 = num7 / num8
 echo "<br> modulus equal of 2 number :- ".($num7%=$num8) ;  // num7 = num7 % num8
 echo "<br> exponential equal of 2 number :- ".($num7**=$num8) ;  // num7 = num7 ** num8




/*

 -> increment        and      decrement operator
       ++                       --
  
 prefix  ++i  i+1=i            --i  i-1=i

 postfix  i++  i=i+1           i--  i=i-1


*/


  
 echo "<br><br>---------------- increment and decrement operator -------------------<br> ";


 $num9 = 5;
 echo "<br> prefix  :- ".++$num9 ;  

 $num10 = 5;
 echo "<br> postfix  :- ".$num10++ ;  
 echo "<br> postfix  :- ".$num10 ;  




/*       

 -> conditional assignment operator
    -> ?:  ternary  
    -> ??  NUll coalascing 


*/


  echo "<br> ternary 1 operator :- ", 5>4 ? "first_is_grater" : "second_is_greater";
  echo "<br> ternary 2 operator :- ", 5>4 ? "first_is_grater" : "second_is_greater";






 ?>


</body>
</html>