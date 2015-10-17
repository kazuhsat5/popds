<?php

namespace Popds\Element;

/**
 * feedクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Feed extends Element
{
    /**
     * xmlns属性値
     *
     * @var
     */
    private $_xmlns = 'http://www.w3.org/2005/Atom';

    /**
     * xml:lang属性値
     *
     * @var
     */
    private $_lang = 'ja-JP';

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

        $result .= sprintf('<feed xmlns="%s" xml:lang="%s">', $this->_xmlns, $this->_lang);

        // 子要素が存在する場合
        if (!empty($this->_elements)) {
            // 子要素の出力
            foreach ($this->_elements as $element) {
                $result .= $element->output();
            }
        }

        $result .= '</feed>'

        return $result;
    }

    public function setXmlns($xmlns)
    {
        $this->_xmlns = $xmlns;
    }

    public function setLang($lang)
    {
        $this->_lang = $lang;
    }

    /**
     * 子要素を追加する
     *
     * @param Popds\Element $element
     * @return void
     */
    public function addElement($element)
    {
        $this->_elements[] = $element;
    }
}
