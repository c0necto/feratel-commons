<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType;

/**
 * Class representing SurchargesAType
 */
class SurchargesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[] $surcharge
     */
    private $surcharge = [
        
    ];

    public function __construct(array $surcharge = null)
    {
        $this->surcharge = $surcharge;
    }

    /**
     * Adds as surcharge
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType $surcharge
     */
    public function addToSurcharge(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType $surcharge)
    {
        $this->surcharge[] = $surcharge;
        return $this;
    }

    /**
     * isset surcharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSurcharge($index)
    {
        return isset($this->surcharge[$index]);
    }

    /**
     * unset surcharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSurcharge($index)
    {
        unset($this->surcharge[$index]);
    }

    /**
     * Gets as surcharge
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[]
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[] $surcharge
     * @return self
     */
    public function setSurcharge(array $surcharge = null)
    {
        $this->surcharge = $surcharge;
        return $this;
    }
}

