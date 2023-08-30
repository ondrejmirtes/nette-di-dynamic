<?php

require_once __DIR__ . '/vendor/autoload.php';

class TestService
{

	public function __construct(public string $test)
	{
	}

}

$configurator = new Nette\Bootstrap\Configurator;
$configurator->setTempDirectory(__DIR__ . '/temp');
$configurator->addConfig(__DIR__ . '/test.neon');
$configurator->addDynamicParameters([
	'env' => getenv(),
]);
$container = $configurator->createContainer();

var_dump($container->parameters['test']);

$one = $container->getService('one');
var_dump($one->test);

$two = $container->getService('two');
var_dump($two->test);
