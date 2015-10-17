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
     * 要素
     *
     * @var
     */
    private $_feed;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->_feed = new Element\Feed();
    }

    /**
     * OPDSの出力
     *
     * @return string
     */
    public function output()
    {
        $result = '';

        // XML宣言
        $xml = new Element\Xml();
        $result .= $xml->output();

        $result .= $this->_feed->output();

        return $result;
    }

    /**
     * フィードのタイトルをセット
     *
     * @param string $feedTitle フィードタイトル
     * @return Popds\Writer
     */
    public function setFeedTitle($feedTitle)
    {
        $this->_feed->addElement(new Element\Title($feedTitle));

        return $this;
    }

    /**
     * フィードのIDをセット
     *
     * @param string $feedId フィードID
     * @return Popds\Writer
     */
    public function setFeedId($feedId)
    {
        $this->_feed->addElement(new Element\Id($feedId));

        return $this;
    }

    /**
     * フィードの更新日時のセット
     *
     * @param string $feedUpdated フィード更新日時(Y-m-dTH:i:s+09:00)
     * @return Popds\Writer
     */
    public function setFeedUpdated($feedUpdated = null)
    {
        // 引数が指定されていない場合
        if (is_null($feedUpdated)) {
            // 現在日時をセット
            $feedUpdated = date('Y-m-d\TH:i:s');
        }

        $this->_feed->addElement(new Element\Updated($feedUpdated));

        return $this;
    }

    /**
     * フィードの作者をセット
     *
     * @param string $name 著者名
     * @param string $uri  URI
     * @return void
     */
    public function setFeedAuthor($name, $uri)
    {
        $author = new Element\Author();

        if (!empty($name)) {
            $author->addElement(new Element\Name($name));
        }

        $this->_feed->addElement($author);

        return $this;
    }
}
