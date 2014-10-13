<?php

require_once 'SplClassLoader.php';

$namespace = 'Qualidade';
$directory = realpath(dirname(__FILE__) . '/..') . DIRECTORY_SEPARATOR . 'src';

$classLoader = new SplClassLoader($namespace, $directory);
$classLoader->register();
