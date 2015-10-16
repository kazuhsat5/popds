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
     * 子要素
     *
     * @var
     */
    private $_elements = [];

    /**
     * 出力する
     *
     * @return string
     */
    public function output()
    {
        var_dump('test');
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

    /**
     * 子要素を追加する
     *
     * @param Popds\Element 子要素
     * @return void
     */
    public function addElement(Element $element)
    {
        $this->_elements[] = $element;
    }
}
