<?php

function suma()
{ 
 $suma=0;
 foreach(func_get_args() as $number)
 {
   if(!is_numeric($number)) continue;
   $suma+= $number;
 }
  return $suma;
}

echo suma(2,5,6,8);
//echo suma();

echo suma('yuyuy', 98, true);

