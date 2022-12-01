<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType;

/**
 * Class representing BankAccountsAType
 */
class BankAccountsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[] $bank
     */
    private $bank = [
        
    ];

    public function __construct(array $bank = null)
    {
        $this->bank = $bank;
    }

    /**
     * Adds as bank
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType $bank
     */
    public function addToBank(\Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType $bank)
    {
        $this->bank[] = $bank;
        return $this;
    }

    /**
     * isset bank
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBank($index)
    {
        return isset($this->bank[$index]);
    }

    /**
     * unset bank
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBank($index)
    {
        unset($this->bank[$index]);
    }

    /**
     * Gets as bank
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[]
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets a new bank
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[] $bank
     * @return self
     */
    public function setBank(array $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }
}

