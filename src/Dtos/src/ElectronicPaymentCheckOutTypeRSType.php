<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ElectronicPaymentCheckOutTypeRSType
 *
 *
 * XSD Type: ElectronicPaymentCheckOutTypeRS
 */
class ElectronicPaymentCheckOutTypeRSType
{
    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var string $datatransTransactionID
     */
    private $datatransTransactionID = null;

    public function __construct(string $uRL = null, string $datatransTransactionID = null)
    {
        $this->uRL = $uRL;
        $this->datatransTransactionID = $datatransTransactionID;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as datatransTransactionID
     *
     * @return string
     */
    public function getDatatransTransactionID()
    {
        return $this->datatransTransactionID;
    }

    /**
     * Sets a new datatransTransactionID
     *
     * @param string $datatransTransactionID
     * @return self
     */
    public function setDatatransTransactionID($datatransTransactionID)
    {
        $this->datatransTransactionID = $datatransTransactionID;
        return $this;
    }
}

