#!/usr/bin/env php
<?php
// app/console

require_once __DIR__ . '/vendor/autoload.php';

use Acme\DemoBundle\Command\GreetCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new GreetCommand);
$application->run();