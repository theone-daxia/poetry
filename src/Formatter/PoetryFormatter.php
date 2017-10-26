<?php

namespace Daxia\Poetry\Formatter;

class PoetryFormatter
{
    private $poetry;

    public function __construct($poetry)
    {
        $this->poetry = $poetry;
    }

    public function formatter()
    {
        $pattern = '/[,.]/';
        $data = preg_split($pattern, $this->poetry->get());
        if ($data === false) {
            echo '哎呀 出错了，这首诗有问题';return;
        }
        $res = implode("\n", $data);
        return $res;
    }
}
