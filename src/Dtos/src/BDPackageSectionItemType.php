<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionItemType
 *
 *
 * XSD Type: BDPackageSectionItem
 */
class BDPackageSectionItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionDetailsType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageProductItemType[] $products
     */
    private $products = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionDetailsType $details = null, array $descriptions = null, array $prices = null, array $products = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->details = $details;
        $this->descriptions = $descriptions;
        $this->prices = $prices;
        $this->products = $products;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDPackageSectionDetailsType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as price
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price
     */
    public function addToPrices(\Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price)
    {
        $this->prices[] = $price;
        return $this;
    }

    /**
     * isset prices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $prices
     * @return self
     */
    public function setPrices(array $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductItemType $product
     */
    public function addToProducts(\Conecto\FeratelDsi\Dtos\BDPackageProductItemType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageProductItemType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductItemType[] $products
     * @return self
     */
    public function setProducts(array $products = null)
    {
        $this->products = $products;
        return $this;
    }
}

