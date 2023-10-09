<?php

namespace bin;

$container = require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application();

$console->addCommands([
    new \bin\command\AnagramCommand(),
    new \bin\command\PalindromeCommand(),
    new \bin\command\PangramCommand()
]);

$console->run();