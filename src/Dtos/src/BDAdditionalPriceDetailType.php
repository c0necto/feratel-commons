<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalPriceDetailType
 *
 *
 * XSD Type: BDAdditionalPriceDetailType
 */
class BDAdditionalPriceDetailType
{
    /**
     * @var int $orgPaymentRequired
     */
    private $orgPaymentRequired = null;

    /**
     * @var bool $priceOfArrival
     */
    private $priceOfArrival = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[] $priceTemplates
     */
    private $priceTemplates = null;

    public function __construct(int $orgPaymentRequired = null, bool $priceOfArrival = null, array $priceTemplates = null)
    {
        $this->orgPaymentRequired = $orgPaymentRequired;
        $this->priceOfArrival = $priceOfArrival;
        $this->priceTemplates = $priceTemplates;
    }

    /**
     * Gets as orgPaymentRequired
     *
     * @return int
     */
    public function getOrgPaymentRequired()
    {
        return $this->orgPaymentRequired;
    }

    /**
     * Sets a new orgPaymentRequired
     *
     * @param int $orgPaymentRequired
     * @return self
     */
    public function setOrgPaymentRequired($orgPaymentRequired)
    {
        $this->orgPaymentRequired = $orgPaymentRequired;
        return $this;
    }

    /**
     * Gets as priceOfArrival
     *
     * @return bool
     */
    public function getPriceOfArrival()
    {
        return $this->priceOfArrival;
    }

    /**
     * Sets a new priceOfArrival
     *
     * @param bool $priceOfArrival
     * @return self
     */
    public function setPriceOfArrival($priceOfArrival)
    {
        $this->priceOfArrival = $priceOfArrival;
        return $this;
    }

    /**
     * Adds as priceTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType $priceTemplate
     */
    public function addToPriceTemplates(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType $priceTemplate)
    {
        $this->priceTemplates[] = $priceTemplate;
        return $this;
    }

    /**
     * isset priceTemplates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceTemplates($index)
    {
        return isset($this->priceTemplates[$index]);
    }

    /**
     * unset priceTemplates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceTemplates($index)
    {
        unset($this->priceTemplates[$index]);
    }

    /**
     * Gets as priceTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[]
     */
    public function getPriceTemplates()
    {
        return $this->priceTemplates;
    }

    /**
     * Sets a new priceTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[] $priceTemplates
     * @return self
     */
    public function setPriceTemplates(array $priceTemplates = null)
    {
        $this->priceTemplates = $priceTemplates;
        return $this;
    }
}

