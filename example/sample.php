<?php

require_once 'bootstrap.php';

$writer = new Popds\Writer();

// feed生成
$writer->setFeedTitle("test")
       ->setFeedId('http://www.kazuhsat.com/ebook/catalog.opds')
       ->setFeedLink('start', 'http://www.kazuhsat.com/ebook/catalog.opds', 'application/atom+xml;profile=opds-catalog;kind=navigation')
       ->setFeedLink('self', 'http://www.kazuhsat.com/ebook/catalog.opds', 'application/atom+xml;profile=opds-catalog;kind=navigation')
       ->setFeedUpdated(date('Y-m-d\TH:i:s'))
       ->setFeedAuthor('test', 'http://www.kazuhsat.com/ebook/');

// entry追加
$writer->addEntry();

// OPDS出力
echo $writer->output();
