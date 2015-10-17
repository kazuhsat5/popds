<?php

namespace Popds\Element;

/**
 * 要素基底クラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
abstract class Element implements ElementInterface
{
    /**
     * 出力
     *
     * @return string
     */
    abstract public function output();
}
