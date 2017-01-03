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

    /**
     * @var ProductAttributes[]
     */
    protected $attributes = [];

    /**
     * @var ProductImage[]
     */
    protected $images = [];

    /**
     * @var ProductVariant[]
     */
    protected $variants = [];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ProductAttributes[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ProductAttributes[] $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return ProductImage[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param ProductImage[] $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return ProductVariant[]
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param ProductVariant[] $variants
     */
    public function setVariants($variants)
    {
        $this->variants = $variants;
    }

    /**
     * @param ProductAttributesInterface $productAttribute
     *
     * @return $this
     */
    public function addAttribute(ProductAttributesInterface $productAttribute)
    {
        $this->attributes[] = $productAttribute;

        return $this;
    }
}
