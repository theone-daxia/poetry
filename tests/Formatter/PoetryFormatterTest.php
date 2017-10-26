<?php

use Daxia\Poetry\Formatter\PoetryFormatter;

use Daxia\Poetry\Generator\PoetryGenerator;

class PoetryFormatterTest extends PHPUnit_Framework_TestCase
{

    public function testSplitPoetry()
    {
        $generator = new PoetryGenerator();
        $formatter = new PoetryFormatter($generator);
        $poetry = $formatter->splitPoetry();
        $this->assertInternalType('array', $poetry);
        $this->assertArrayHasKey('status', $poetry);
        $this->assertArrayHasKey('msg', $poetry);
        $this->assertArrayHasKey('data', $poetry);
    }

    public function testFormat()
    {
        $generator = new PoetryGenerator();
        $formatter = new PoetryFormatter($generator);
        $poetry = $formatter->format();
        $this->assertInternalType('string', $poetry);
    }

    public function testFormatWithSeparator()
    {
        $generator = new PoetryGenerator();
        $formatter = new PoetryFormatter($generator);
        $poetry = $formatter->formatWithSeparator();
        $this->assertInternalType('string', $poetry);
    }
}
