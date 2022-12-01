<?php

namespace Conecto\FeratelDsi\Dtos\PaymentInformationType;

/**
 * Class representing SplitPaymentAType
 */
class SplitPaymentAType
{
    /**
     * @var bool $active
     */
    private $active = null;

    public function __construct(bool $active = null)
    {
        $this->active = $active;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}

