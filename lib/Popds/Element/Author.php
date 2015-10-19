<?php

namespace Popds\Element;

use Popds;

/**
 * authorクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Author extends Popds\Element
{
    /**
     * 子要素
     *
     * @var
     */
    private $_elements = [];

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        $result = '';

        $result .= '<author>';

        foreach ($this->_elements as $element) {
            $result .= $element->output();
        }

        $result .= '</author>';

        return $result;
    }

    /**
     * 子要素の追加
     *
     * @param Popds\Element 子要素
     * @return void
     */
    public function addElement(Popds\Element $element)
    {
        $this->_elements[] = $element;
    }
}
