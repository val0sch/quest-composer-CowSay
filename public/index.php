<?php
require __DIR__ . "/../vendor/autoload.php";

use CowSay\Cow;

$bessie = new Cow('Hello Bananas!');

$bessie->setTongue("U");

// or just echo the object for direct output
echo $bessie;
