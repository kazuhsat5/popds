<?php

namespace Popds;

use Popds\Element;

/**
 * ライタークラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Writer
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
    }

    public function exec()
    {
        $xml = new Element\Xml();
        echo $xml->output();
    }
}
