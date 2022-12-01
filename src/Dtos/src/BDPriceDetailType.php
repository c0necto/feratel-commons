<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceDetailType
 *
 *
 * XSD Type: BDPriceDetailType
 */
class BDPriceDetailType
{
    /**
     * @var int $inclVT
     */
    private $inclVT = null;

    /**
     * @var int $fromTo
     */
    private $fromTo = null;

    /**
     * @var string $rule
     */
    private $rule = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var int $orgPaymentRequired
     */
    private $orgPaymentRequired = null;

    /**
     * @var bool $priceOfArrival
     */
    private $priceOfArrival = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[] $priceTemplates
     */
    private $priceTemplates = null;

    public function __construct(int $inclVT = null, int $fromTo = null, string $rule = null, int $nights = null, int $orgPaymentRequired = null, bool $priceOfArrival = null, array $priceTemplates = null)
    {
        $this->inclVT = $inclVT;
        $this->fromTo = $fromTo;
        $this->rule = $rule;
        $this->nights = $nights;
        $this->orgPaymentRequired = $orgPaymentRequired;
        $this->priceOfArrival = $priceOfArrival;
        $this->priceTemplates = $priceTemplates;
    }

    /**
     * Gets as inclVT
     *
     * @return int
     */
    public function getInclVT()
    {
        return $this->inclVT;
    }

    /**
     * Sets a new inclVT
     *
     * @param int $inclVT
     * @return self
     */
    public function setInclVT($inclVT)
    {
        $this->inclVT = $inclVT;
        return $this;
    }

    /**
     * Gets as fromTo
     *
     * @return int
     */
    public function getFromTo()
    {
        return $this->fromTo;
    }

    /**
     * Sets a new fromTo
     *
     * @param int $fromTo
     * @return self
     */
    public function setFromTo($fromTo)
    {
        $this->fromTo = $fromTo;
        return $this;
    }

    /**
     * Gets as rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
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
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate
     */
    public function addToPriceTemplates(\Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[]
     */
    public function getPriceTemplates()
    {
        return $this->priceTemplates;
    }

    /**
     * Sets a new priceTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[] $priceTemplates
     * @return self
     */
    public function setPriceTemplates(array $priceTemplates = null)
    {
        $this->priceTemplates = $priceTemplates;
        return $this;
    }
}

