<?php

use Daxia\Poetry\Formatter\PoetryFormatter;

use Daxia\Poetry\Generator\PoetryGenerator;

class PoetryFormatterTest extends PHPUnit_Framework_TestCase
{
    public function testFormatter()
    {
        $generator = new PoetryGenerator();
        $formatter = new PoetryFormatter($generator);
        $poetry = $formatter->formatter();
        $this->assertInternalType('string', $poetry);
    }
}
