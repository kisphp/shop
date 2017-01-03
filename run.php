<?php

require_once __DIR__ . '/vendor/autoload.php';

$pf = new \Kisphp\Components\Product\ProductFacade();

$p = $pf->createProduct();

dump($p);die;
