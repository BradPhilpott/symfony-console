<?php

use src\Checker;
use PHPUnit\Framework\TestCase;

class CheckerTest extends TestCase {

    private $checker;

    public function setUp() :void {
        $this->checker = new Checker();
    }

    public function testIsPalindromeWithPalindromeValue() {
        $this->assertTrue($this->checker->isPalindrome('anna'));
    }

    public function testIsPalindromeWithoutPalindromeValue() {
        $this->assertFalse($this->checker->isPalindrome('Bark'));
    }

    public function testIsAnagramWithAnagramValue() {
        $this->assertTrue($this->checker->isAnagram('coalface', 'cacao elf'));
    }

    public function testIsAnagramWithoutAnagramValue() {
        $this->assertFalse($this->checker->isAnagram('coalface', 'dark elf'));
    }

    public function testIsPangramWithPangramValue() {
        $this->assertTrue($this->checker->isPangram('The quick brown fox jumps over the lazy dog'));
    }

    public function testIsPangramWithoutPangramValue() {
        $this->assertFalse($this->checker->isPangram('The British Broadcasting Corporation (BBC) is a British public service broadcaster.'));
    }
}