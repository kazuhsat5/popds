<?php

namespace Popds\Element;

use Popds;

/**
 * titleクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Title extends Popds\Element
{
    /**
     * タイトル
     *
     * @var
     */
    private $_title;

    /**
     * コンストラクタ
     */
    public function __construct($title)
    {
        $this->_title = $title;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<title>%s</title>', $this->_title);
    }
}
