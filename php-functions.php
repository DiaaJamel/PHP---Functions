<?php 
// 1. Write a function to calculate the factorial of a number (a non-negative integer).
// The function accepts the number as an argument.

function factorial($num){
    if($num ==0){
	return 1;
    }else {	
	   return $num * factorial($num-1);
    }};
echo factorial(4);
echo '<br/>';

// -------------------------------
// 2. Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no
// positive divisors other than 1 and itself

// function primeCheker($num1){
//  if(fmod($num1)== 0 && fmod($num1) ==1){
//      return "$num1 is a prime number";
//  } else {
//      return "$num1 is not a prime number";
//  }
// }
// echo primeCheker(3);
// echo '<br/>';

// function primeCheker($num2){
//  for($i=2; $i<$num2; $i++){
//       if($num2 %$i ==0){
// 		   return 0;
// 		  }}
//   return 1;
//    }
// $x = primeCheker(7);
// if ($x==0){
//     echo "$num2 is not a prime number";
// }else {
//     echo "$num2 is a prime number";
// }
// echo '<br/>';

// -------------------------------
// 3. Write a function to reverse a string.

// function reverseString($string){

// }
// echo reverseString("Diaa");
// echo '<br/>';

// function reverse_string($str1)
// {
//  $n = strlen($str1);
//  if($n == 1)
//    {
//     return $str1;
//    }
//  else
//    {
//    $n--;
//    return (substr($str1,1, $n)) . substr($str1, 0, 1);
//    }
// }
// print_r(reverse_string('1234')."\n");

// -------------------------------
// 4. Write a function to sort an string array depending on the alphabetical order .
$words = array("Orange", "Apple", "Banana");
function sorting($words){

}
echo sorting('Diaa');
echo '<br/>';



?>