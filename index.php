<?php

// index.php
use Classes\Foo;

include __DIR__ . '/Autoloader.php';

$foo = new Foo();
echo $foo->value();
