<?php

namespace Kisphp\Components\Product\Transfer;

/**
 * Concrete product
 */
class ProductVariant
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $sku;

    /**
     * Product name to be appended to Product::title
     *
     * @var string
     */
    protected $name;
}
