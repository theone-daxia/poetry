<?php

use Daxia\Poetry\Generator\PoetryGenerator;

class PoetryGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $generator = new PoetryGenerator();
        $poetry = $generator->get();
        $this->assertThat($poetry, $this->isType('string'));
        $this->assertInternalType('string', $poetry);
    }
}
