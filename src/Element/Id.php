<?php

namespace Popds\Element;

/**
 * idクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Id extends Element
{
    /**
     * ID
     *
     * @var
     */
    private $_id;

    /**
     * コンストラクタ
     */
    public function __construct($id)
    {
        $this->_id = $id;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<id>%s</id>', $this->_id);
    }

    public function setId($id)
    {
        $this->_id = $id;
    }
}
