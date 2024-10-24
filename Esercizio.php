<?php
require_once('function.php');
$addresses=array(
    'via tal dei tali 1, 20100 Milano (MI) Italia',
    ['via tal dei tali 2', 'Genova', 'GE', '1000', 'Italia'],
    2,
    null,
    new stdClass(),
    ['Mario', 'Rossi']

);

foreach ($addresses as $address) {
 if(is_string($address)){
     echo $address . PHP_EOL;
 }
}

$addresses2=reorder($addresses);
var_dump($addresses2);
