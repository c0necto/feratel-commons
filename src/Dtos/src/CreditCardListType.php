<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CreditCardListType
 *
 *
 * XSD Type: CreditCardListType
 */
class CreditCardListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CreditCardType[] $creditCard
     */
    private $creditCard = [
        
    ];

    public function __construct(array $creditCard = null)
    {
        $this->creditCard = $creditCard;
    }

    /**
     * Adds as creditCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CreditCardType $creditCard
     */
    public function addToCreditCard(\Conecto\FeratelDsi\Dtos\CreditCardType $creditCard)
    {
        $this->creditCard[] = $creditCard;
        return $this;
    }

    /**
     * isset creditCard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreditCard($index)
    {
        return isset($this->creditCard[$index]);
    }

    /**
     * unset creditCard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreditCard($index)
    {
        unset($this->creditCard[$index]);
    }

    /**
     * Gets as creditCard
     *
     * @return \Conecto\FeratelDsi\Dtos\CreditCardType[]
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \Conecto\FeratelDsi\Dtos\CreditCardType[] $creditCard
     * @return self
     */
    public function setCreditCard(array $creditCard = null)
    {
        $this->creditCard = $creditCard;
        return $this;
    }
}

