<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RPOffersListType
 *
 *
 * XSD Type: RPOffersList
 */
class RPOffersListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RPOfferType[] $offer
     */
    private $offer = [
        
    ];

    public function __construct(array $offer = null)
    {
        $this->offer = $offer;
    }

    /**
     * Adds as offer
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RPOfferType $offer
     */
    public function addToOffer(\Conecto\FeratelDsi\Dtos\RPOfferType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * @return \Conecto\FeratelDsi\Dtos\RPOfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * @param \Conecto\FeratelDsi\Dtos\RPOfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;
        return $this;
    }
}

