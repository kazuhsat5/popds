<?php

namespace Popds\Element;

/**
 * XMLクラス
 *
 * @author kazuhsat <kazuhsat555@gmail.com>
 */
class Xml extends Element
{
    /**
     * バージョン
     *
     * @var
     */
    private $_version = '1.0';

    /**
     * エンコーディング
     *
     * @var
     */
    private $_encoding = 'utf-8';

    /**
     * 出力する
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<?xml version="%s" encoding="%s"?>', $this->_version, $this->_encoding);
    }

    public function setVersion($version)
    {
        $this->_version = $version;
    }

    public function setEncoding($encoding)
    {
        $this->_encoding = $encoding;
    }
}
