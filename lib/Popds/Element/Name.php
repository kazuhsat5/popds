<?php

namespace Popds\Element;

use Popds;

/**
 * nameクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Name extends Popds\Element
{
    /**
     * Name
     *
     * @var
     */
    private $_name;

    /**
     * コンストラクタ
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<name>%s</name>', $this->_name);
    }
}
