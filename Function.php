<?php

// 1function that finds the maximum range of a triangle's last edge
function third_side($triangle1, $triangle2, $c)
{
    $angle = cal_cos($c);
    return sqrt(($triangle1 * $triangle1) + ($triangle2 * $triangle2) - 2 * $triangle1 * $triangle2 * $angle);
}

// 2Function that counts all the ones in the binary representation of an integer.
function countAllOnes($num)
{
  // If number is not an integer or less than 1
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

  // Initialize count
  $count = 0;

  // Loop to nth and increase count 
  // if found 1 in binary
  while ($num) {
    $count += $num & 1;
    $num >>= 1;
  }

  return $count;
}

// 3function that receives 2 parts of a path
function separate($srate, $prate)
{
  $sepa = array($srate, $prate);
  echo implode(" / ", $sepa);
}

// 4Function that validates if a given number is a Sastry number.
function isSastry($num)
{
  $result = "FALSE";

  // If number is not an integer or less than 1
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

  // Concatenation
  $num = $num . $num + 1;
  
  // Check if the concatenated numbers are perfect squared
  $sr = sqrt($num);
  if(($sr - floor($sr)) == 0){
    $result = "TRUE";
  }

  return  $result;
}

?>