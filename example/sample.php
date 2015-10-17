<?php

require_once 'bootstrap.php';

$writer = new Popds\Writer();

echo $writer->setFeedTitle("test")
            ->setFeedId('http://www.kazuhsat.com/ebook/catalog.opds')
            ->setFeedUpdated(date('Y-m-d\TH:i:s'))
            ->output();
