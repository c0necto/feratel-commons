<?php

namespace Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType;

/**
 * Class representing GuaranteeAType
 */
class GuaranteeAType
{
    /**
     * @var string $type
     */
    private $type = null;

    public function __construct(string $type = null)
    {
        $this->type = $type;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

