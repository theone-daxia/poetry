<?php

/**
 * 诗词仓库
 *
 * @author daxia
 * @access public
 * @version 1.0.0
 * @link http://www.gushiwen.org/guwen/chuci.aspx
 */

namespace Daxia\Poetry\Category;

class PoetryCategory
{
    public $poetry;

    public function __construct()
    {
        $this->poetry = [
            'title' => '舟夜书所见',
            'content' => '月黑见渔灯,孤光一点萤.微微风簇浪,散作满河星.'
        ];
    }

    public function getPoetry()
    {
        return $this->poetry;
    }

    public function addPoetry()
    {
    }

    public function deletePoetry()
    {
    }

    public function update_poetry()
    {
    }
}
