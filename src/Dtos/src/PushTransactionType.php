<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PushTransactionType
 *
 *
 * XSD Type: PushTransactionType
 */
class PushTransactionType
{
    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    public function __construct(string $dBCode = null)
    {
        $this->dBCode = $dBCode;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }
}

