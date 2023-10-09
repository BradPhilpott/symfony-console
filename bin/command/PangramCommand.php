<?php

namespace bin\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use src\Checker;

class PangramCommand extends Command {
    protected function configure() {
        $this
            ->setName('pangram')
            ->setDescription('Checks if the word / phrase is a pangram or not')
            ->addArgument('phrase', InputArgument::REQUIRED, 'The phrase to be checked')
            ->setHelp('A pangram is a word, phrase, or other sequence of characters that contains all of the letters of the alphabet.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) :int {
        $checker = new Checker();

        $string = $input->getArgument('phrase');

        $check = $checker->isPangram($string);

        $output->writeln($check ? 'This string is a pangram!' : 'This string is not a pangram!');
        
        return $check;
    }
}