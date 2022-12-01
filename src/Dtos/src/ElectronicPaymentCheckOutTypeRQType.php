<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ElectronicPaymentCheckOutTypeRQType
 *
 *
 * XSD Type: ElectronicPaymentCheckOutTypeRQ
 */
class ElectronicPaymentCheckOutTypeRQType
{
    /**
     * @var string $shoppingCartId
     */
    private $shoppingCartId = null;

    /**
     * @var string $userId
     */
    private $userId = null;

    /**
     * @var string $linkKey
     */
    private $linkKey = null;

    /**
     * @var string $websiteURL
     */
    private $websiteURL = null;

    /**
     * @var string $cancelURL
     */
    private $cancelURL = null;

    /**
     * @var string $paymentMethods
     */
    private $paymentMethods = null;

    /**
     * @var string $commissionFromSP
     */
    private $commissionFromSP = null;

    /**
     * @var string $commissionToPOS
     */
    private $commissionToPOS = null;

    public function __construct(string $shoppingCartId = null, string $userId = null, string $linkKey = null, string $websiteURL = null, string $cancelURL = null, string $paymentMethods = null, string $commissionFromSP = null, string $commissionToPOS = null)
    {
        $this->shoppingCartId = $shoppingCartId;
        $this->userId = $userId;
        $this->linkKey = $linkKey;
        $this->websiteURL = $websiteURL;
        $this->cancelURL = $cancelURL;
        $this->paymentMethods = $paymentMethods;
        $this->commissionFromSP = $commissionFromSP;
        $this->commissionToPOS = $commissionToPOS;
    }

    /**
     * Gets as shoppingCartId
     *
     * @return string
     */
    public function getShoppingCartId()
    {
        return $this->shoppingCartId;
    }

    /**
     * Sets a new shoppingCartId
     *
     * @param string $shoppingCartId
     * @return self
     */
    public function setShoppingCartId($shoppingCartId)
    {
        $this->shoppingCartId = $shoppingCartId;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets as linkKey
     *
     * @return string
     */
    public function getLinkKey()
    {
        return $this->linkKey;
    }

    /**
     * Sets a new linkKey
     *
     * @param string $linkKey
     * @return self
     */
    public function setLinkKey($linkKey)
    {
        $this->linkKey = $linkKey;
        return $this;
    }

    /**
     * Gets as websiteURL
     *
     * @return string
     */
    public function getWebsiteURL()
    {
        return $this->websiteURL;
    }

    /**
     * Sets a new websiteURL
     *
     * @param string $websiteURL
     * @return self
     */
    public function setWebsiteURL($websiteURL)
    {
        $this->websiteURL = $websiteURL;
        return $this;
    }

    /**
     * Gets as cancelURL
     *
     * @return string
     */
    public function getCancelURL()
    {
        return $this->cancelURL;
    }

    /**
     * Sets a new cancelURL
     *
     * @param string $cancelURL
     * @return self
     */
    public function setCancelURL($cancelURL)
    {
        $this->cancelURL = $cancelURL;
        return $this;
    }

    /**
     * Gets as paymentMethods
     *
     * @return string
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * @param string $paymentMethods
     * @return self
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Gets as commissionFromSP
     *
     * @return string
     */
    public function getCommissionFromSP()
    {
        return $this->commissionFromSP;
    }

    /**
     * Sets a new commissionFromSP
     *
     * @param string $commissionFromSP
     * @return self
     */
    public function setCommissionFromSP($commissionFromSP)
    {
        $this->commissionFromSP = $commissionFromSP;
        return $this;
    }

    /**
     * Gets as commissionToPOS
     *
     * @return string
     */
    public function getCommissionToPOS()
    {
        return $this->commissionToPOS;
    }

    /**
     * Sets a new commissionToPOS
     *
     * @param string $commissionToPOS
     * @return self
     */
    public function setCommissionToPOS($commissionToPOS)
    {
        $this->commissionToPOS = $commissionToPOS;
        return $this;
    }
}

