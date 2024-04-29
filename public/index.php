<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$elephant = new Animal();

$lion->name = 'lion';
$lion->size = 50;
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->threatenedLevel = 'VU';

$parrot->name = 'parrot';
$parrot->size = 10;
$parrot->pawNumber = 2;
$parrot->threatenedLevel = 'LC';

$elephant->name = 'elephant';
$elephant->size = 80;
$elephant->pawNumber = 4;
$elephant->threatenedLevel = 'CR';

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>