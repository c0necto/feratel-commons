<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BankCodeListType
 *
 *
 * XSD Type: BankCodeList
 */
class BankCodeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BankCodeType[] $bankCode
     */
    private $bankCode = [
        
    ];

    public function __construct(array $bankCode = null)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * Adds as bankCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BankCodeType $bankCode
     */
    public function addToBankCode(\Conecto\FeratelDsi\Dtos\BankCodeType $bankCode)
    {
        $this->bankCode[] = $bankCode;
        return $this;
    }

    /**
     * isset bankCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankCode($index)
    {
        return isset($this->bankCode[$index]);
    }

    /**
     * unset bankCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankCode($index)
    {
        unset($this->bankCode[$index]);
    }

    /**
     * Gets as bankCode
     *
     * @return \Conecto\FeratelDsi\Dtos\BankCodeType[]
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets a new bankCode
     *
     * @param \Conecto\FeratelDsi\Dtos\BankCodeType[] $bankCode
     * @return self
     */
    public function setBankCode(array $bankCode = null)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
}

