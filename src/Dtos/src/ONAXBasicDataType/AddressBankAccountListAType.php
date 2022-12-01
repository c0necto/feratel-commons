<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing AddressBankAccountListAType
 */
class AddressBankAccountListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[] $addressBankAccount
     */
    private $addressBankAccount = [
        
    ];

    public function __construct(array $addressBankAccount = null)
    {
        $this->addressBankAccount = $addressBankAccount;
    }

    /**
     * Adds as addressBankAccount
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType $addressBankAccount
     */
    public function addToAddressBankAccount(\Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType $addressBankAccount)
    {
        $this->addressBankAccount[] = $addressBankAccount;
        return $this;
    }

    /**
     * isset addressBankAccount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressBankAccount($index)
    {
        return isset($this->addressBankAccount[$index]);
    }

    /**
     * unset addressBankAccount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressBankAccount($index)
    {
        unset($this->addressBankAccount[$index]);
    }

    /**
     * Gets as addressBankAccount
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[]
     */
    public function getAddressBankAccount()
    {
        return $this->addressBankAccount;
    }

    /**
     * Sets a new addressBankAccount
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[] $addressBankAccount
     * @return self
     */
    public function setAddressBankAccount(array $addressBankAccount)
    {
        $this->addressBankAccount = $addressBankAccount;
        return $this;
    }
}

