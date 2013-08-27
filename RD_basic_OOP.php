
<?php 

class Bike {
  //properties for bike
  var $price;
  var $max_speed;
  var $miles;

  //defining the constructor - this gets called whenever a new instance of Dojo is created
  function __construct($price, $max_speed){

    $this->price = $price;
    $this->max_speed = $max_speed;
    $this->miles = 0; //whenever a new class is created, set the miles to 0

  }


  function displayInfo(){

    echo "Price: " . $this->price . "<br/>";
    echo "Maximum speed: " . $this->max_speed . "<br/>";
    echo "Miles driven: " . $this->miles . "<br/>";
    echo "<br/>";

  }

  function drive(){

    $this->miles += 10;

  }

  function reverse(){

    $this->miles -= 5;

  }


}

$bike1 = new Bike(200, "25 mph"); // Creating my first instance of the Bike class
$bike2 = new Bike(200, "25 mph"); // Creating my second instance of the Bike class
$bike3 = new Bike(200, "25 mph"); // Creating my third instance of the Bike class

$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();

$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();

$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();

 ?>