<?php
// print numbers 1-100. if number is divisible by 3, print "fizz". 
// if number is divisible by 5, print "buzz". 
// if number is divisible by 3 and 5, print "fizzbuzz"

function calculate() {  
   for ($i = 1; $i < 101; $i++) {
      if ($i % 3 == 0) {
         echo "fizz\n";
      } else if ($i % 5 == 0) {
         echo "buzz\n";
      } else if ($i % 15 == 0) {
         echo "fizzbuzz\n"; 
      } else {
         echo $i."\n";
      }
   }
}

calculate();

?>
