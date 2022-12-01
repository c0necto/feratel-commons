<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalPriceTemplatesListType
 *
 *
 * XSD Type: BDAdditionalPriceTemplatesList
 */
class BDAdditionalPriceTemplatesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[] $priceTemplate
     */
    private $priceTemplate = [
        
    ];

    public function __construct(array $priceTemplate = null)
    {
        $this->priceTemplate = $priceTemplate;
    }

    /**
     * Adds as priceTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType $priceTemplate
     */
    public function addToPriceTemplate(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType $priceTemplate)
    {
        $this->priceTemplate[] = $priceTemplate;
        return $this;
    }

    /**
     * isset priceTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceTemplate($index)
    {
        return isset($this->priceTemplate[$index]);
    }

    /**
     * unset priceTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceTemplate($index)
    {
        unset($this->priceTemplate[$index]);
    }

    /**
     * Gets as priceTemplate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[]
     */
    public function getPriceTemplate()
    {
        return $this->priceTemplate;
    }

    /**
     * Sets a new priceTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplateType[] $priceTemplate
     * @return self
     */
    public function setPriceTemplate(array $priceTemplate = null)
    {
        $this->priceTemplate = $priceTemplate;
        return $this;
    }
}

