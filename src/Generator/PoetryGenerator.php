<?php

/**
 * 诗词生产器
 *
 * @author daxia
 * @access public
 * @version 1.0.0
 * @link http://www.gushiwen.org/guwen/chuci.aspx
 */

namespace Daxia\Poetry\Generator;

use Daxia\Poetry\Category\PoetryCategory;

class PoetryGenerator
{
    public function get()
    {
        $poetry_category = new PoetryCategory();
        $poetry = $poetry_category->getPoetry();
        $poetry = $poetry['title'] . '.' . $poetry['content'];
        return $poetry;
    }
}
