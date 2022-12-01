<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplatesListType
 *
 *
 * XSD Type: BDPriceTemplatesList
 */
class BDPriceTemplatesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[] $priceTemplate
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
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate
     */
    public function addToPriceTemplate(\Conecto\FeratelDsi\Dtos\BDPriceTemplateType $priceTemplate)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[]
     */
    public function getPriceTemplate()
    {
        return $this->priceTemplate;
    }

    /**
     * Sets a new priceTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType[] $priceTemplate
     * @return self
     */
    public function setPriceTemplate(array $priceTemplate = null)
    {
        $this->priceTemplate = $priceTemplate;
        return $this;
    }
}

