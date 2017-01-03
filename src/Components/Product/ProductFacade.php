<?php

namespace Kisphp\Components\Product;

use Kisphp\Components\Product\Transfer\Product;
use Kisphp\Components\Product\Transfer\ProductAttributes;
use Kisphp\Components\Tools\Uuid;

class ProductFacade
{
    /**
     * @return Product
     */
    public function createProduct()
    {
        $p = new Product();
        $p->setId(Uuid::generateV4());
        $p->setTitle('AMD FX 8370');
        $p->setDescription('AMD FX 8370 description');
        //$p->addAttribute($this->createProductAttribute());

        return $p;
    }

    /**
     * @return ProductAttributes
     */
    public function createProductAttribute()
    {
        $attr = new ProductAttributes();

        return $attr;
    }
}
