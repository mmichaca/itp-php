<?php

$sueldo=10000;

$iva=$sueldo*0.15;
$isr=$sueldo*0.1;

$total= $sueldo-$iva-$isr;

echo "El sueldo base del trabajador es $sueldo; monto del iva es: $iva ; de ISR es: $isr; el sueldo final es: $total";


