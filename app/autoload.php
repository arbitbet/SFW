<?php

require_once __DIR__.'/../vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'          => array(__DIR__.'/../vendor'),
    'Application'   => __DIR__,
));

$loader->registerNamespaceFallbacks(array(
    __DIR__.'/../src',
));

$loader->register();
