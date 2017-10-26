<?php

namespace Daxia\Poetry\Formatter;

class PoetryFormatter
{
    private $poetry;

    private $separator;

    public function __construct($poetry)
    {
        $this->poetry = $poetry;
        $this->separator = '********************';
    }

    /**
     * 按照逗号、句号分割诗句
     *
     * @return array
     */
    public function splitPoetry()
    {
        $res = ['status' => false, 'msg' => '', 'data' => []];
        $pattern = '/[,.]/';
        $data = preg_split($pattern, $this->poetry->get());

        if ($data === false) {
            $res['msg'] = 'php 函数罢工啦';
            return $res;
        } else if (empty($res)) {
            $res['msg'] = '这诗有问题';
            return $res;
        }

        $res['status'] = true;
        $res['data'] = $data;
        return $res;
    }

    /**
     * 简单格式化
     *
     * @return string
     */
    public function format()
    {
        $poetry = $this->splitPoetry();
        if ($poetry['status'] == false) {
            return $poetry['msg'];
        }
        $res = implode("\n", $poetry['data']);
        return $res;
    }

    /**
     * 带有分隔符的格式化，并突出标题
     *
     * @return string
     */
    public function formatWithSeparator()
    {
        $poetry = $this->splitPoetry();
        if ($poetry['status'] == false) {
            return $poetry['msg'];
        }
        $poetry = $poetry['data'];
        $title = array_shift($poetry);
        $title = '[ ' . $title . ' ]';
        $content = implode("\n", $poetry);
        $res = $this->separator . "\n\n" . $title . "\n\n" . $content . "\n";
        return $res;
    }
}
