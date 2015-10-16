<?php

namespace Popds\Element;

/**
 * updatedクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Updated extends Element
{
    /**
     * アップデート日時
     *
     * @var
     */
    private $_updated;

    /**
     * コンストラクタ
     */
    public function __construct($updated)
    {
        $this->_updated = $updated;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<updated>%s</updated>', $this->_updated);
    }

    public function setUpdated($updated)
    {
        $this->_updated = $updated;
    }
}
