<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProvidersType;

use Conecto\FeratelDsi\Dtos\BasicElementType;

/**
 * Class representing MetaRatingAType
 */
class MetaRatingAType extends BasicElementType
{
    /**
     * @var bool $checkMinAmount
     */
    private $checkMinAmount = null;

    public function __construct(bool $checkMinAmount = null, \DateTime $dateFrom = null)
    {
        $this->checkMinAmount = $checkMinAmount;
        parent::__construct($dateFrom);
    }

    /**
     * Gets as checkMinAmount
     *
     * @return bool
     */
    public function getCheckMinAmount()
    {
        return $this->checkMinAmount;
    }

    /**
     * Sets a new checkMinAmount
     *
     * @param bool $checkMinAmount
     * @return self
     */
    public function setCheckMinAmount($checkMinAmount)
    {
        $this->checkMinAmount = $checkMinAmount;
        return $this;
    }
}

