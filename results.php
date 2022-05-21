<?php
  	// initialize the sum to 0
	$product = 0;
  
	// get the user numbers
	$numOne = intval($_POST["num-one"]);
  $numTwo = intval($_POST["num-two"]);
  
	// use a for loop to calculate and display the product of the two numbers
	for ($counter = 1; $counter <= $numTwo; $counter++) {
    $product = $product + $numOne;
  }

  // display the product back to the user
    echo "The product is " . $product . ".";
?>