.<?php 
$arr = array(  
    array('Roll'=>43, 'name'=>'asdfgh', 'subject'=>'INT220'), 
    array('Roll'=>38, 'name'=>'qwerty', 'subject'=>'INT221'),  
    array('Roll'=>43, 'name'=>'zxcvb', 'subject'=>'CSE302') 
); 
      
  
// Create an empty array 
$myarray = array(); 
      
// It returns the keys of the array 
$keys = array_keys($arr);  
  
// Iterating through the multidimensional array 
for($i = 0; $i < count($arr); $i++) {  
  
    $keys = array_keys($arr); 
  
    foreach($arr[$keys[$i]] as $key => $value) {  
        $f = 0; 
          
        for($j = 0; $j < count($arr); $j++) {  
              
            if($i != $j) {  
                foreach($arr[$keys[$j]] as $key1 => $value1) { 
      
                    if(($key1 == $key) && ($value == $value1)) { 
                        $f = 1; 
      
                        $dup_ind = $j;  
                    } 
                } 
            } 
        } 
    } 
      
    if($f ==1 ) {  
        $temp_arr = array(); 
        array_push($temp_arr, $arr[$i]); 
          
        array_push($temp_arr, $arr[$dup_ind]);  
          
        unset($arr[$dup_ind]);  
          
        array_push($myarray, $temp_arr); 
    } 
    else { 
          
        array_push($myarray, $arr[$keys[$i]]); 
    } 
} 
  
print_r($myarray); 
  
?> 