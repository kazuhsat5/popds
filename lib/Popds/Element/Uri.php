<?php

namespace Popds\Element;

/**
 * URIクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class URI extends Element
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
