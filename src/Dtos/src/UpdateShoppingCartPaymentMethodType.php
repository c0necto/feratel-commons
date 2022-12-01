<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing UpdateShoppingCartPaymentMethodType
 *
 *
 * XSD Type: UpdateShoppingCartPaymentMethod
 */
class UpdateShoppingCartPaymentMethodType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    public function __construct(string $id = null, string $paymentMethod = null)
    {
        $this->id = $id;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}

