<?php

namespace Popds\Element;

use Popds;

/**
 * Entryクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Entry extends Popds\Element
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

        $result .= '<entry>';

        foreach ($this->_elements as $element) {
            $result .= $element->output();
        }

        $result .= '</entry>';

        return $result;
    }

    /**
     * 子要素の追加
     *
     * @param Popds\Element 子要素
     * @return void
     */
    public function addElement(Element $element)
    {
        $this->_elements[] = $element;
    }
}
