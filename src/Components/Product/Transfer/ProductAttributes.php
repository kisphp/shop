<?php

namespace Kisphp\Components\Product\Transfer;

class ProductAttributes implements ProductAttributesInterface
{
    /**
     * @var string UUID
     */
    protected $id;

    /**
     * @var string
     */
    protected $idProduct;

    /**
     * @var Product
     */
    protected $product;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param string $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }
}
