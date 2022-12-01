<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType;

/**
 * Class representing PaymentOptionsAType
 */
class PaymentOptionsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType $calculatedBasketResult
     */
    private $calculatedBasketResult = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[] $possiblePaymentsMethods
     */
    private $possiblePaymentsMethods = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType $calculatedBasketResult = null, array $possiblePaymentsMethods = null)
    {
        $this->calculatedBasketResult = $calculatedBasketResult;
        $this->possiblePaymentsMethods = $possiblePaymentsMethods;
    }

    /**
     * Gets as calculatedBasketResult
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType
     */
    public function getCalculatedBasketResult()
    {
        return $this->calculatedBasketResult;
    }

    /**
     * Sets a new calculatedBasketResult
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType $calculatedBasketResult
     * @return self
     */
    public function setCalculatedBasketResult(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType $calculatedBasketResult)
    {
        $this->calculatedBasketResult = $calculatedBasketResult;
        return $this;
    }

    /**
     * Adds as option
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType $option
     */
    public function addToPossiblePaymentsMethods(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType $option)
    {
        $this->possiblePaymentsMethods[] = $option;
        return $this;
    }

    /**
     * isset possiblePaymentsMethods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPossiblePaymentsMethods($index)
    {
        return isset($this->possiblePaymentsMethods[$index]);
    }

    /**
     * unset possiblePaymentsMethods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPossiblePaymentsMethods($index)
    {
        unset($this->possiblePaymentsMethods[$index]);
    }

    /**
     * Gets as possiblePaymentsMethods
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[]
     */
    public function getPossiblePaymentsMethods()
    {
        return $this->possiblePaymentsMethods;
    }

    /**
     * Sets a new possiblePaymentsMethods
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[] $possiblePaymentsMethods
     * @return self
     */
    public function setPossiblePaymentsMethods(array $possiblePaymentsMethods)
    {
        $this->possiblePaymentsMethods = $possiblePaymentsMethods;
        return $this;
    }
}

