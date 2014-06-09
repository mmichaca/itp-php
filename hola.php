<?php
/**
comentario de varias lineas
*/

$message='hola mundo';

echo "$message\n";

define('PUBLISHER', 'Springer');

echo PUBLISHER;

$pi=0.0314E2;

echo "\n$pi\n";

echo '\n$pi';

$people=['Luis', 'Miriam', 'Noe', 1234, false,[2],];

$old= array(2,3,4,);


$product=['name' => 'Ajax',
		  'price' => 230,
		  'available' =>true,
         ];



		 
echo $product['price'];

echo "\n{$product['name']}\n";
		 
print_r($old);

print_r($people);

print_r($product);

$foo= 'bar';

$$foo= 'baz';

echo "\n$foo";

echo "\n$bar";

?>
