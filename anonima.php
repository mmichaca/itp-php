<?php
$mayor= function($a, $b)
{
  if($a > $b)
  {
   return $a;
  }
   else
   {
     return $b;
   }

};

echo $mayor(12,7);
/*
$mayor='hola';

echo $mayor;
*/
$numbers= [1,3,4,11,100,5];
$ordering= 'ascendent';
usort($numbers, function($a, $b) use($ordering){
												if('ascendent'=== $ordering)
												 {return $a - $b;}
												 
												  return $b-$a;
												
												} );   // return $b - $a; ordenacion mayor a menor
print_r($numbers);

