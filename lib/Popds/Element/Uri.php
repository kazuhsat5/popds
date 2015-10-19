<?php

namespace Popds\Element;

use Popds;

/**
 * URIクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class URI extends Popds\Element
{
    /**
     * URI
     *
     * @var
     */
    private $_uri;

    /**
     * コンストラクタ
     */
    public function __construct($uri)
    {
        $this->_uri = $uri;
    }

    /**
     * 出力
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<uri>%s</uri>', $this->_uri);
    }
}
