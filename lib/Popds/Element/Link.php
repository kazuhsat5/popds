<?php

namespace Popds\Element;

/**
 * linkクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Link extends Element
{
    /**
     * rel
     *
     * @var
     */
    private $_rel = '';

    /**
     * href
     *
     * @var
     */
    private $_href = '';

    /**
     * type
     *
     * @var
     */
    private $_type = '';

    /**
     * コンストラクタ
     */
    public function __construct($rel = null, $href = null, $type = null)
    {
        if (!empty($rel))  $this->_rel  = $rel;
        if (!empty($href)) $this->_href = $href;
        if (!empty($type)) $this->_type = $type;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        $result = [];

        $result[] = '<link';

        // relが指定されている場合
        if (!empty($this->_rel)) {
            $result[] = 'rel="' . $this->_rel . '"';
        }

        // hrefが指定されている場合
        if (!empty($this->_href)) {
            $result[] = 'href="' . $this->_href . '"';
        }

        // typeが指定されている場合
        if (!empty($type)) {
            $result[] = 'type="' . $this->_type . '"';
        }

        $result[] = '/>';

        return implode(' ', $result);
    }
}
