


<!-- 


   class :- 
       -> it is a blueprint of any object or it is collection of group of
           property(class variable) & method(class function) 

   object :- 
       -> it is a instance(object) of a class .        

 -->

<?php 


   class calculator{
 
     public $a ,$b ,$c;

       function sum(){
       	$this->c = $this->a + $this->b;
       	return $this->c;
       }



   }


  $obj1 = new calculator();

  $obj1->a = 10;
  $obj1->b = 20;
  
   echo $obj1->sum();




 ?>




<!-- 

   constructor :- 
		  -> it is a spacial type of function whan object create this function call automaitaclly
		  -> you can also set default value in constructor 
		  -> NOTE : php doen not support multiple constructor with one class
		             it take only one construtor .  


  -> syntax :- 

      function __construct(){ <- default
		.. code

      }

   ->  syntax :- perameterised constructor  
   
      function __construct($variable_name = value){ 
		.. code

      }


 -->

 <?php 



  class sample{
 
 	 public $name;

     // function __construct(){
     // 	echo"<br> this is sample class default constructor !";
     // }

     function __construct($x = 'sumit'){
     	$this->name = $x;
     }


     function show(){
     	echo "<br> the name was is : ".$this->name;
     }


  }


   $obj1 = new sample();
   $obj1->show();
   $obj2 = new sample("suraj");
   $obj2->show();




  ?>




<!-- 


   -> inheritance :- 
        -> types :- 
            (1) single level inheritance
                -> syntax :- 
                 class Superclass {
				    // ...
 				  }
 
				 class Subclass extends Superclass {
				    // ...
				  }

            (2) multi-level inheritance
                -> syntax :- 
	                class Grandparent {
					    // ...
					}

					class ParentClass extends Grandparent {
					    // ...
					}

					class Child extends ParentClass {
					    // ...
					}
 
            (3) hierarchical inheritance
                -> syntax :- 

					class Superclass {
					    // ...
					}

					class Subclass1 extends Superclass {
					    // ...
					}

					class Subclass2 extends Superclass {
					    // ...
					}




    ->Note :- 
           -> In single inheritance parent class have constrctor &
              child does not have constructor in that case parent
              class constructor called automaitaclly.

           -> and the most important this is object is child class. 

           -> if both class have constructor that if you want class 
              parent class object in child class that do this .

                 -> syntax 

                      class child_class extends parent_class{
	
						 function function_name(){
						  -> with function	
							parent::__constructor(value);

						 }

						 function __constructor(){
						  -> with constuctor 	
							parent::__constructor(value);
						 }

                      }  






 -->



<?php 



    class animal{
    	public $name,$age;

    	function __construct($name,$age){
    		$this->name = $name;
    		$this->age = $age;
    	}

    	function getName(){
    		return $this->name;

    	}

    	function getAge(){
    		return $this->age;
    	}

    	function makeSound(){
    		echo"<br> this animal make sound laoud ";
    	}

    }


    class Dog extends animal{
    	public $breed;

    	function __construct($name,$age,$breed){

    		parent::__construct($name,$age);
    		$this->breed = $breed;

    	}

    	function getBreed(){
    		return $this->breed;
    	}
    }



    $obj = new Dog('lion',45,'lebro');
    echo"<br> the dog name is : ".$obj->getName();
    echo"<br> the dog age is : ".$obj->getAge();
    echo $obj->makeSound();
    echo"<br> the dog breed is : ".$obj->getBreed();



 ?>



 <?php 


   class employee{

   		public $name,$age,$salary;

   		function __construct($name,$age,$salary){
   			$this->name = $name;
   			$this->age = $age;
   			$this->salary = $salary;
   		}

   		function show(){
   			echo "<h2>Employees Details</h2>";
   			echo"name is ".$this->name;
   			echo"<br>age is ".$this->age;
   			echo"<br>salary is ".$this->salary;
   		}


   }


   class manager extends employee{


   }



  $e1 = new manager("deepak",34,33546.56);
  $e1->show();


  ?>







<!-- 


	-> Access Modifier :- 

						Class itself   |   Outside class  | Derived Class  
	   (1) Public          Done                Done            Done 
	   (2) Protected       Done                  X             Done
	   (3) Private         Done                  X               X




 -->


<?php 


	class MyClass {
	    public $publicProperty = "Public Property";

	    protected $protectedProperty = "Protected Property";

	    private $privateProperty = "Private Property";

	    public function publicMethod() {
	        echo "Public Method<br>";
	    }

	    protected function protectedMethod() {
	        echo "Protected Method<br>";
	    }

	    private function privateMethod() {
	        echo "Private Method<br>";
	    }

	    public function accessPropertiesAndMethods() {
	        echo $this->publicProperty . "\n";
	        echo $this->protectedProperty . "\n";
	        echo $this->privateProperty . "\n";

	        $this->publicMethod();
	        $this->protectedMethod();
	        $this->privateMethod();
	    }
	}

	$obj = new MyClass();
	echo $obj->publicProperty . "\n";   // Output: Public Property
	$obj->publicMethod();               // Output: Public Method

	// Accessing protected and private properties/methods outside the class will result in an error
	// echo $obj->protectedProperty;   // Error: Cannot access protected property
	// echo $obj->privateProperty;     // Error: Cannot access private property
	// $obj->protectedMethod();        // Error: Cannot access protected method
	// $obj->privateMethod();          // Error: Cannot access private method

	$obj->accessPropertiesAndMethods();  // Accessing properties and methods within the class



 ?>



 <!-- 

     
      -> Overriding Property :- 

           Eg. :- 

             class A{
			   
			      public $name = "Some Text"; 
              
               } 


             class B extends class A{
	
				 public  $name = "Some Text";

             }   
       
       -> Overriding Property :- 

           Eg. :-

             class A{
	
				  public $name;

				  public function show(){

	                 echo 'my Name'.$this->name;

				  }

             } 

 

             class B extends A{
	
				  public $name;

				  public function show(){

	                 echo 'Your Name'.$this->name;

				  }

             } 


             




  -->




  <?php 


      class base{
      	public $name = "parent class";
      	function display(){
      		echo"<br> parent class : ".$this->name;
      	}
      }

      class derived extends base{
      	public $name = 'child class';
      	function display(){
      		echo"<br> child class : ".$this->name;
      	}

      }

      // $obj1 = new base();
      $obj1 = new derived();
      echo $obj1->name;
      $obj1->display();


   ?>




<!-- 

  
     -> Abstract Class :- 
          -> Abstract class is a secure class you can't create instance(object)
              of that class.

       Note :-  the instance(object) is create by inheriting that class explain in
                   below        


            syntax :- 

                 abstract class class_name{
	                
	              -> defined  
					abstract access_modifier function function_name();

                 }

                 class child_class_name{
	               
	               -> declare     
	                access_modifier function function_name(){
					   ...code ..
					}

                 }
            

                 -> create object :-

                      obj = new child_class_name; 

                    


 -->

<?php 
  
  # Example :- 


    abstract class parentClass{
    	public $name = "Change";
    	abstract protected function show($val);
    }

 
 
    class childClass extends parentClass{

    	public function show($value){
    		$this->name = $value;
    		echo "<br> name is : ".$this->name;

    	}


    }

          $obj = new childClass();
          $obj->show("computer");




 # Example :- 


          abstract class shape{
          	protected $color;
 
            public function __construct($color){
            	$this->color = $color;
            }

            abstract protected function calArea();

            public function getColor(){
            	return $this->color;
            }

          }


          class circle extends shape{

          	private $radius;

          	  public function __construct($radius,$color){
          	  	  parent::__construct($color);
          	  	  $this->radius = $radius;
          	  } 

          	  public function calArea(){
          	  	return pi() * $this->radius;
          	  }


          } 

          $obj = new circle(5,"red");
          echo "<br> the radius is : ".$obj->calArea();
          echo "<br> the color is : ".$obj->getColor();


 ?>


 <!-- 

    -> interface :-

         (interface)   (interface)    (interface) <- (method can defined)
           class A       class B        class C   <- (property can not defined)  X
              |              |            |       <- (implement) <- X 
              +--------------+------------+       
                             |
                          class D <- derived class
			Interface 
			    |
	 -> work like abstract class 		    
	 -> we can not create object of interface   

                            

  -> in interface we can declare method only or we can't implement on that class .
  -> or we can not defined property(class variable) & it totaly work like abstract
      class .
  -> Can not defined access modifier .  
  -> in interface all method a abstrct compair to abstract class



      -> Syntax :-

		  interface A{
			function hello($n);
		  }

		  interface B{
		    function hii($n);
		    function bye();
		  }

		  $test = new A(); <- error 

		Step2:- implements the interfase in one class
		
		   class C implements A,B{
				public function hello($n){
	       		  echo "hello".$n;
				}

				public function hii($n){
				  echo "hi".$n;
				}

				public function bye(){
				   echo "bye";
				}

		   }  


  -->

  <?php 


  		interface shape1{
  			public function calculateArea();
  			public function calculateparimeter();
  		}


  		class Circle1 implements shape1{

  			private $radius;

  			public function __construct($radius){
  				$this->radius = $radius;
  			}

  			public function calculateArea(){
  				return pi() * ($this->radius * $this->radius); 
  			}

  			public function calculateparimeter(){
  				return 2 * pi() * $this->radius; 
  			}

  		}


  		class Square implements shape1{
  			public $side;

  			public function __construct($side){
  				$this->side = $side;
  			}

  			public function calculateArea(){
  				return $this->side * $this->side; 
  			}

  			public function calculateparimeter(){
  				return $this->side * 4;
  			}


  		}


  		$obj1 = new Circle1(34);
  		$obj2 = new Square(5);

           echo "<br> area of circle : ".$obj1->calculateArea();
           echo "<br> perimite of circle : ".$obj1->calculateparimeter();


           echo "<br> area of square : ".$obj2->calculateArea();
           echo "<br> perimite of square : ".$obj2->calculateparimeter();


   

   # Example 2 :- 

           interface parent1{
           	  function calc($a,$b);
           }


           interface parent2{
           	  function sub($a,$b);
           }


           class childClass1 implements parent1,parent2{
           	   public function calc($a,$b){
           	   	  echo "<br> addition using interface : ".($a+$b); 
           	   }

           	   public function sub($a,$b){
           	   	 echo"<br> substract using interface : ".($a-$b);
           	   }
           }


           $obj3 = new childClass1();
           $obj3->calc(45,54);
           $obj3->sub(5,6);



   ?>





