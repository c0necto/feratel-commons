<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType;

/**
 * Class representing PaymentsAType
 */
class PaymentsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType[] $serviceProviderPayment
     */
    private $serviceProviderPayment = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\OrganisationPaymentAType $organisationPayment
     */
    private $organisationPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType $externalPayment
     */
    private $externalPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType $total
     */
    private $total = null;

    public function __construct(array $serviceProviderPayment = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\OrganisationPaymentAType $organisationPayment = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType $externalPayment = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType $total = null)
    {
        $this->serviceProviderPayment = $serviceProviderPayment;
        $this->organisationPayment = $organisationPayment;
        $this->externalPayment = $externalPayment;
        $this->total = $total;
    }

    /**
     * Adds as serviceProviderPayment
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType $serviceProviderPayment
     */
    public function addToServiceProviderPayment(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType $serviceProviderPayment)
    {
        $this->serviceProviderPayment[] = $serviceProviderPayment;
        return $this;
    }

    /**
     * isset serviceProviderPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderPayment($index)
    {
        return isset($this->serviceProviderPayment[$index]);
    }

    /**
     * unset serviceProviderPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderPayment($index)
    {
        unset($this->serviceProviderPayment[$index]);
    }

    /**
     * Gets as serviceProviderPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType[]
     */
    public function getServiceProviderPayment()
    {
        return $this->serviceProviderPayment;
    }

    /**
     * Sets a new serviceProviderPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType[] $serviceProviderPayment
     * @return self
     */
    public function setServiceProviderPayment(array $serviceProviderPayment = null)
    {
        $this->serviceProviderPayment = $serviceProviderPayment;
        return $this;
    }

    /**
     * Gets as organisationPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\OrganisationPaymentAType
     */
    public function getOrganisationPayment()
    {
        return $this->organisationPayment;
    }

    /**
     * Sets a new organisationPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\OrganisationPaymentAType $organisationPayment
     * @return self
     */
    public function setOrganisationPayment(?\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\OrganisationPaymentAType $organisationPayment = null)
    {
        $this->organisationPayment = $organisationPayment;
        return $this;
    }

    /**
     * Gets as externalPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType
     */
    public function getExternalPayment()
    {
        return $this->externalPayment;
    }

    /**
     * Sets a new externalPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType $externalPayment
     * @return self
     */
    public function setExternalPayment(?\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType $externalPayment = null)
    {
        $this->externalPayment = $externalPayment;
        return $this;
    }

    /**
     * Gets as total
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }
}

