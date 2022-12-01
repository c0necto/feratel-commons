<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType;

/**
 * Class representing BankAType
 */
class BankAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * @var string $iBAN
     */
    private $iBAN = null;

    /**
     * @var string $account
     */
    private $account = null;

    public function __construct(string $id = null, string $countryCode = null, string $iBAN = null, string $account = null)
    {
        $this->id = $id;
        $this->countryCode = $countryCode;
        $this->iBAN = $iBAN;
        $this->account = $account;
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
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as iBAN
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->iBAN;
    }

    /**
     * Sets a new iBAN
     *
     * @param string $iBAN
     * @return self
     */
    public function setIBAN($iBAN)
    {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Gets as account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param string $account
     * @return self
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }
}

