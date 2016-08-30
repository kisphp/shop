<?php

namespace Kisphp\Components\Product\Transfer;

/**
 * Abstract product
 */
class Product
{
    /**
     * Product unique id in the system
     *
     * @var int
     */
    protected $id;

    /**
     * Product title displayed in the page
     *
     * @var string
     */
    protected $title;

    /**
     * Product description, available on product details page
     *
     * @var string
     */
    protected $description;
}
