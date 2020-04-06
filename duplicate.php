<?php
$colors = array( 
  0 => 'Red', 
  1 => 'Green', 
  2 => 'White', 
  3 => 'Black', 
  4 => 'Red', 
); 

$numbers = array( 
  0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
); 
$unique_colors = array_keys(array_flip($colors)); 
$unique_numbers = array_keys(array_flip($numbers)); 
print_r($unique_colors);
print_r($unique_numbers);
?>