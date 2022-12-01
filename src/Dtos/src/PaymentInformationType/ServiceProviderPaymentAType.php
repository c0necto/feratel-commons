<?php

namespace Conecto\FeratelDsi\Dtos\PaymentInformationType;

/**
 * Class representing ServiceProviderPaymentAType
 */
class ServiceProviderPaymentAType
{
    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var bool $guaranteeRequested
     */
    private $guaranteeRequested = null;

    /**
     * @var string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType\GuaranteeAType[] $guarantee
     */
    private $guarantee = [
        
    ];

    public function __construct(bool $active = null, bool $guaranteeRequested = null, string $guaranteeType = null, array $guarantee = null)
    {
        $this->active = $active;
        $this->guaranteeRequested = $guaranteeRequested;
        $this->guaranteeType = $guaranteeType;
        $this->guarantee = $guarantee;
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

    /**
     * Gets as guaranteeRequested
     *
     * @return bool
     */
    public function getGuaranteeRequested()
    {
        return $this->guaranteeRequested;
    }

    /**
     * Sets a new guaranteeRequested
     *
     * @param bool $guaranteeRequested
     * @return self
     */
    public function setGuaranteeRequested($guaranteeRequested)
    {
        $this->guaranteeRequested = $guaranteeRequested;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType\GuaranteeAType $guarantee
     */
    public function addToGuarantee(\Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType\GuaranteeAType $guarantee)
    {
        $this->guarantee[] = $guarantee;
        return $this;
    }

    /**
     * isset guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType\GuaranteeAType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType\GuaranteeAType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }
}

