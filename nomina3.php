<?php
$departamentos= require 'empleados.php';

$departamentos['Ventas'] =[] ;
$departamentos['Ventas'][] =['nombre' => 'Roberto Hernandez', 'sueldo' => 3500, ];

echo "\nNombre	| Sueldo | Departament	| IVA	| ISR	| Total	";
foreach($departamentos  as $departamento =>$empleados)
{
  echo "\n$departamento";
  $totalDepartamento=0;
  array_walk($empleados, function($empleado)
   use($departamento, &$totalDepartamento)   
   {
     $iva= $empleado['sueldo'] *.15;
     $isr= $empleado['sueldo'] *.1;	 
	 $total= $empleado['sueldo'] - $iva - $isr;
	 $totalDepartamento += $total;
    echo "\n{$empleado['nombre']} | {$empleado['sueldo']} | ";	
	echo "$departamento | $iva	| $isr|	$total";
   } );
   
   echo "\n$totalDepartamento";
}

//$departamentos[]= ['Ventas' => [] ];

