<?php

use Daxia\Poetry\Category\PoetryCategory;

class PoetryCategoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetPoetry()
    {
        $poetry_category = new PoetryCategory();
        $poetry = $poetry_category->getPoetry();
        $this->assertArrayHasKey('title', $poetry);
        $this->assertArrayHasKey('content', $poetry);
    }
}
