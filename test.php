<?php

require_once __DIR__ . '/vendor/autoload.php';

$configurator = new Nette\Bootstrap\Configurator;
$configurator->setTempDirectory(__DIR__ . '/temp');
$configurator->addConfig(__DIR__ . '/test.neon');
$configurator->addDynamicParameters([
	'env' => getenv(),
]);
$container = $configurator->createContainer();

var_dump($container->parameters['test']);
