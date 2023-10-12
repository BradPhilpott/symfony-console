<?php

namespace command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use src\Checker;

class AnagramCommand extends Command {

    protected function configure() {
        $this
            ->setName('anagram')
            ->setDescription('Checks whether two strings are anagrams.')
            ->addArgument('word', InputArgument::REQUIRED, 'The main word')
            ->addArgument('comparison', InputArgument::REQUIRED, 'Word to be checked if it is anagram with the main one')
            ->setHelp('An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) :int {
        $checker = new Checker();

        $word = $input->getArgument('word');
        $anagramWord = $input->getArgument('comparison');

        $check = $checker->isAnagram($word, $anagramWord);

        $output->writeln($check ? 'These strings are anagrams!' : 'These strings are not anagrams!');
        
        return $check;
    }
}