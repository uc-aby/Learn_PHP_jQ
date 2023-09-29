<?php
  $name = "John Doe"; // String
  $age = 30; // Integer
  $height = 5.9; // Float
  $isStudent = true; // Boolean

  $numbers = array(1, 2, 3, 4, 5); // Array

  echo "Name: $name, <br> 
  Age: $age, <br> 
  Height: $height,<br>
  Is Student: $isStudent <br>"; 
  print_r($numbers);
 
  $message = "<br>Hello, World!";
  echo $message;
  echo "<br>";
  // This is a single-line comment

  /*
   * This is a multi-line
   * comment block
   */
  $x = 10;
  $y = 5;

  $sum = $x + $y;
  $isGreater = $x > $y;
  echo $isGreater;
  echo "<br>";
  $logicalAnd = ($x > 0) && ($y > 0);
  echo $logicalAnd;

  echo "<br>";
  $num = 10;

  if($num > 5) {
    echo "Number is greater than 5";
  } else {
    echo "Number is 5 or less";
  }
  echo "<br>";
  // Loop example
  for($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
  }

  echo "<br>";
  function greet($name) {
    return "Hello, $name!";
  }

  $greeting = greet("Alice");
  echo $greeting;

  echo "<br>";
  $colors = array("Red", "Green", "Blue");
  $numbers = [1, 2, 3, 4, 5];
  
  echo $colors[0]; // Outputs: Red
  echo "<br>";
  echo $numbers[2]; // Outputs: 3

  echo "<br>";

//   Super Global Variables
// $name = $_GET['name']; // Assuming a URL like: example.com?name=John
// echo "Hello, $name!";
echo "<br>";
 
$name = $_GET['name']; // Assuming a URL like: example.com?name=John
  echo "Hello, $name!";

<form method="post" action="process.php">
  <input type="text" name="username">
  <input type="submit" value="Submit">
</form>

?>

