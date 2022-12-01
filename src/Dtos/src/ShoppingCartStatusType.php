<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ShoppingCartStatusType
 *
 *
 * XSD Type: ShoppingCartStatusType
 */
class ShoppingCartStatusType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $transactionID
     */
    private $transactionID = null;

    public function __construct(string $id = null, string $status = null, string $transactionID = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->transactionID = $transactionID;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }
}

