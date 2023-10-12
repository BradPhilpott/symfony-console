<?php

namespace command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use src\Checker;

class PalindromeCommand extends Command {
    protected function configure() {
        $this
            ->setName('palindrome')
            ->setDescription('Checks if the word is a palindrome or not')
            ->addArgument('word', InputArgument::REQUIRED, 'The word to be checked')
            ->setHelp('A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) :int {
        $checker = new Checker();

        $string = $input->getArgument('word');

        $check = $checker->isPalindrome($string);

        $output->writeln($check ? 'This string is a palindrome!' : 'This string is not a palindrome!');
        
        return $check;
    }
}