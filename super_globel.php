<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 

      #    _________________________PHP Global Variables________________________

 # ->  a superglobal variable is a predefined variable that is accessible from any part of the script, regardless of scope.


/*
 -> The PHP superglobal variables types:

(1) $_SERVER
(2) $_REQUEST
(3) $_POST
(4) $_GET
(5) $_FILES
(6) $_COOKIE
(7) $_SESSION


		------------------$GLOBALS----------------------


-> $GLOBALS :- it is a superglobal variable in PHP that allows you to access global variables from anywhere in your PHP code

-> PHP stores all global variables in an array called $GLOBALS[index]
-> syntax :- $GLOBALS['variable_name'];


*/



 echo "<br>---------------- GLOBALS -------------------<br><br> ";


# -> Example :- 

      $x = 5;
      $y = 6;

      function mytest1(){
         global $x,$y;
      	return $x+$y;

      }

      function mytest2(){
        
      	return $GLOBALS['x'] + $GLOBALS['y'];

      }

 
	  echo mytest1()."<br>"; 
	  echo mytest2()."<br>"; 

# -> Example :- 


		$my_var = "Hello, world!";

		function my_function() {
		  global $my_var;
		  echo $my_var;
		}

		my_function(); // output: "Hello, world!"

		// Using $GLOBALS instead of the global keyword:
		function my_other_function() {
		  echo $GLOBALS['my_var'];
		}

		my_other_function(); // output: "Hello, world!"

# -> Example :- 

		$counter = 0;

		function increment(){
			$GLOBALS['counter']++;
		}

	  
	    increment();
	    echo "<br>".$counter;

	    $counter = 5;

	    function decrement(){
	    	$GLOBALS['counter']--;
	    }
	     
	    decrement();
	    echo "<br>".$counter;
	   

/*

 -> $_SERVER :- 
     is a superglobal variable in PHP that contains information about the server environment, such as headers, paths, and script locations.
 -> 
	REMOTE_ADDR: The IP address of the client making the request.
	SERVER_NAME: The server's hostname or IP address.
	SERVER_SOFTWARE: The server software name and version.
	REQUEST_METHOD: The HTTP request method (e.g., GET, POST, PUT).
	REQUEST_URI: The requested URI, including the query string.
	HTTP_USER_AGENT: The user agent string of the client's web browser.
	HTTP_REFERER: The URL of the page that linked to the current page.


*/


 echo "<br>---------------- SERVER -------------------<br><br> ";

	

    echo "<pre>";
      print_r($_SERVER);
    echo "<pre>";

    $client_ip = $_SERVER['REMOTE_ADDR'];
	echo "<br>Client IP address is: " . $client_ip;

	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];



/*

					------------------$_request----------------------

-> 
	$_REQUEST is a superglobal variable that contains the values of both $_GET, $_POST, and $_COOKIE arrays. It is used to collect data submitted from HTML forms using the GET or POST method, as well as data stored in cookies.


*/

echo "<br>---------------- request POST -------------------<br><br> ";


?>
<h1>REQUEST POST METHOD</h1>
<form action="super_globel.php" method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
<?php
  
 
  
  echo "<br>".$_REQUEST['username'];
  echo "<br>".$_REQUEST['password'];



?>


<?php


 echo "<br>---------------- request GET-------------------<br><br> ";


?>


<h1>REQUEST GET METHOD</h1>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


/*

					------------------$_POST----------------------

-> 
	$_POST is a superglobal variable that is used to collect data submitted from HTML forms using the POST method. It is a more secure way of sending data to the server because the data is not visible in the URL.

*/


 echo "<br>---------------- POST-------------------<br><br> ";

?>
<h1>POST METHOD</h1>
<form action="super_globel.php" method="post">
	username : <input type="text" name="username"> <br>
	userpass : <input type="text" name="userpass"> <br>
	 <input type="submit" value="login" name="">
</form>

<?php

   echo "<br>".$_POST['username'];
   echo "<br>".$_POST['userpass'];

?>


<?php


 echo "<br>----------------POST EXAMPLE 2-------------------<br><br> ";


?>


<h1>POST METHOD 2</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br>
  <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


/*

					------------------$_GET----------------------

-> 
	$_GET is a superglobal variable that is used to collect data submitted from HTML forms using the GET method. It is also used to retrieve data from the URL.

*/


 echo "<br>----------------GET-------------------<br><br> ";
?>

<h1>GET METHOD</h1>
<form action="super_globel.php" method="get">
	username : <input type="text" name="username"> <br>
	userpass : <input type="text" name="userpass"> <br>
	 <input type="submit" value="login" name="">
</form>

<?php

   echo "<br>".$_GET['username'];
   echo "<br>".$_GET['userpass'];

?>

</body>
</html>
