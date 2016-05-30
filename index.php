<?php

use App\FooInterface;

require __dir__ . '/vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/config.php');
$container = $builder->build();

var_dump($container->get(FooInterface::class));
