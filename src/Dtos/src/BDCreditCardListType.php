<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDCreditCardListType
 *
 *
 * XSD Type: BDCreditCardList
 */
class BDCreditCardListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[] $creditCard
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
     * @param \Conecto\FeratelDsi\Dtos\BDCreditCardItemType $creditCard
     */
    public function addToCreditCard(\Conecto\FeratelDsi\Dtos\BDCreditCardItemType $creditCard)
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
     * @return \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[]
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[] $creditCard
     * @return self
     */
    public function setCreditCard(array $creditCard = null)
    {
        $this->creditCard = $creditCard;
        return $this;
    }
}

