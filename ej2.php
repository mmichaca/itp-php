<?php
/*
$datos = array('01'=>10000,'02'=>20000 );

foreach($datos as $field => $value)
{
  echo "\n$field: $value";
  $iva=$value*0.15;
  echo "\nEl iva de $value es: $iva ";
  $isr=$value*0.1;
  echo "\nEl isr de $value es: $isr ";
  $total= $value-$iva-$isr;
  echo "\nEl sueldo total es: $total ";
 } 
*/  
 $datos2= [['name'=>'x','sueldo'=>10000,],
           ['name'=>'y','sueldo'=>20000,] , 
 
   ];
  
  
 foreach($datos2 as $field => $value)
 {
   echo "\n\nEl trabajador {$value['name']}";
   echo "\t gana {$value['sueldo']}";
   $iva=$value['sueldo']*0.15;
  echo "\t El iva de {$value['sueldo']} es: $iva ";
  $isr=$value['sueldo']*0.1;
  echo "\t El isr de {$value['sueldo']} es: $isr ";
  $total= $value['sueldo']-$iva-$isr;
  echo "\t El sueldo total es: $total ";  
   
 }
