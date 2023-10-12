<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application();

$console->addCommands([
    new \command\AnagramCommand(),
    new \command\PalindromeCommand(),
    new \command\PangramCommand()
]);

$console->run();