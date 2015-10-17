<?php

namespace Popds;

use Popds\Element;

/**
 * ライタークラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Writer
{
    /**
     * 要素
     *
     * @var
     */
    private $_elements = [];

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->_elements[] = new Element\Xml();
    }

    /**
     * OPDSの出力
     *
     * @return string
     */
    public function output()
    {
        $result = '';

        foreach ($this->_elements as $element) {
            $result .= $element->output();
        }

        return $result;
    }

    public function addElement(Popds\Element $element)
    {
        $this->_elements[] = $element;
    }
}
