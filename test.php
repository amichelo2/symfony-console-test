#!/usr/bin/env php
<?php
// app/console

use Acme\DemoBundle\Command\GreetCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new GreetCommand);
$application->run();