<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGapPriceTemplatesListType
 *
 *
 * XSD Type: BDGapPriceTemplatesList
 */
class BDGapPriceTemplatesListType
{
    /**
     * @var bool $useProductPrice
     */
    private $useProductPrice = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate
     */
    private $priceTemplate = null;

    public function __construct(bool $useProductPrice = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate = null)
    {
        $this->useProductPrice = $useProductPrice;
        $this->priceTemplate = $priceTemplate;
    }

    /**
     * Gets as useProductPrice
     *
     * @return bool
     */
    public function getUseProductPrice()
    {
        return $this->useProductPrice;
    }

    /**
     * Sets a new useProductPrice
     *
     * @param bool $useProductPrice
     * @return self
     */
    public function setUseProductPrice($useProductPrice)
    {
        $this->useProductPrice = $useProductPrice;
        return $this;
    }

    /**
     * Gets as priceTemplate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateType
     */
    public function getPriceTemplate()
    {
        return $this->priceTemplate;
    }

    /**
     * Sets a new priceTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate
     * @return self
     */
    public function setPriceTemplate(?\Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate = null)
    {
        $this->priceTemplate = $priceTemplate;
        return $this;
    }
}

