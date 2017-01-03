<?php
namespace Kisphp\Components\Product\Transfer;

interface ProductAttributesInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getIdProduct();

    /**
     * @param string $idProduct
     */
    public function setIdProduct($idProduct);

    /**
     * @return Product
     */
    public function getProduct();

    /**
     * @param Product $product
     */
    public function setProduct($product);
}