<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing TransactionListType
 *
 *
 * XSD Type: TransactionListType
 */
class TransactionListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TransactionType[] $transaction
     */
    private $transaction = [
        
    ];

    public function __construct(array $transaction = null)
    {
        $this->transaction = $transaction;
    }

    /**
     * Adds as transaction
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TransactionType $transaction
     */
    public function addToTransaction(\Conecto\FeratelDsi\Dtos\TransactionType $transaction)
    {
        $this->transaction[] = $transaction;
        return $this;
    }

    /**
     * isset transaction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransaction($index)
    {
        return isset($this->transaction[$index]);
    }

    /**
     * unset transaction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransaction($index)
    {
        unset($this->transaction[$index]);
    }

    /**
     * Gets as transaction
     *
     * @return \Conecto\FeratelDsi\Dtos\TransactionType[]
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param \Conecto\FeratelDsi\Dtos\TransactionType[] $transaction
     * @return self
     */
    public function setTransaction(array $transaction = null)
    {
        $this->transaction = $transaction;
        return $this;
    }
}

