<?php
   $number=1234567;
   $sum=0;
   while($number>0)
   {
     $sum=$sum+$number%10;
     $number/=10;
   }
    echo"sum of digit 1234567 is $sum";
?>