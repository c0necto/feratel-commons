<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CreateShoppingCartType
 *
 *
 * XSD Type: CreateShoppingCartType
 */
class CreateShoppingCartType
{
    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var string $sessionID
     */
    private $sessionID = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CartItemAccommodationType $cartItemAccommodation
     */
    private $cartItemAccommodation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CartItemBrochureType $cartItemBrochure
     */
    private $cartItemBrochure = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CartItemAdditionalServiceType $cartItemAdditionalService
     */
    private $cartItemAdditionalService = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CartItemPackageType $cartItemPackage
     */
    private $cartItemPackage = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CartItemShopArticleType $cartItemShopArticle
     */
    private $cartItemShopArticle = null;

    public function __construct(string $dbCode = null, string $salesChannelId = null, string $sessionID = null, \Conecto\FeratelDsi\Dtos\CartItemAccommodationType $cartItemAccommodation = null, \Conecto\FeratelDsi\Dtos\CartItemBrochureType $cartItemBrochure = null, \Conecto\FeratelDsi\Dtos\CartItemAdditionalServiceType $cartItemAdditionalService = null, \Conecto\FeratelDsi\Dtos\CartItemPackageType $cartItemPackage = null, \Conecto\FeratelDsi\Dtos\CartItemShopArticleType $cartItemShopArticle = null)
    {
        $this->dbCode = $dbCode;
        $this->salesChannelId = $salesChannelId;
        $this->sessionID = $sessionID;
        $this->cartItemAccommodation = $cartItemAccommodation;
        $this->cartItemBrochure = $cartItemBrochure;
        $this->cartItemAdditionalService = $cartItemAdditionalService;
        $this->cartItemPackage = $cartItemPackage;
        $this->cartItemShopArticle = $cartItemShopArticle;
    }

    /**
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }

    /**
     * Gets as salesChannelId
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * Sets a new salesChannelId
     *
     * @param string $salesChannelId
     * @return self
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
        return $this;
    }

    /**
     * Gets as sessionID
     *
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * Sets a new sessionID
     *
     * @param string $sessionID
     * @return self
     */
    public function setSessionID($sessionID)
    {
        $this->sessionID = $sessionID;
        return $this;
    }

    /**
     * Gets as cartItemAccommodation
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemAccommodationType
     */
    public function getCartItemAccommodation()
    {
        return $this->cartItemAccommodation;
    }

    /**
     * Sets a new cartItemAccommodation
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemAccommodationType $cartItemAccommodation
     * @return self
     */
    public function setCartItemAccommodation(?\Conecto\FeratelDsi\Dtos\CartItemAccommodationType $cartItemAccommodation = null)
    {
        $this->cartItemAccommodation = $cartItemAccommodation;
        return $this;
    }

    /**
     * Gets as cartItemBrochure
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemBrochureType
     */
    public function getCartItemBrochure()
    {
        return $this->cartItemBrochure;
    }

    /**
     * Sets a new cartItemBrochure
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemBrochureType $cartItemBrochure
     * @return self
     */
    public function setCartItemBrochure(?\Conecto\FeratelDsi\Dtos\CartItemBrochureType $cartItemBrochure = null)
    {
        $this->cartItemBrochure = $cartItemBrochure;
        return $this;
    }

    /**
     * Gets as cartItemAdditionalService
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemAdditionalServiceType
     */
    public function getCartItemAdditionalService()
    {
        return $this->cartItemAdditionalService;
    }

    /**
     * Sets a new cartItemAdditionalService
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemAdditionalServiceType $cartItemAdditionalService
     * @return self
     */
    public function setCartItemAdditionalService(?\Conecto\FeratelDsi\Dtos\CartItemAdditionalServiceType $cartItemAdditionalService = null)
    {
        $this->cartItemAdditionalService = $cartItemAdditionalService;
        return $this;
    }

    /**
     * Gets as cartItemPackage
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemPackageType
     */
    public function getCartItemPackage()
    {
        return $this->cartItemPackage;
    }

    /**
     * Sets a new cartItemPackage
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemPackageType $cartItemPackage
     * @return self
     */
    public function setCartItemPackage(?\Conecto\FeratelDsi\Dtos\CartItemPackageType $cartItemPackage = null)
    {
        $this->cartItemPackage = $cartItemPackage;
        return $this;
    }

    /**
     * Gets as cartItemShopArticle
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemShopArticleType
     */
    public function getCartItemShopArticle()
    {
        return $this->cartItemShopArticle;
    }

    /**
     * Sets a new cartItemShopArticle
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemShopArticleType $cartItemShopArticle
     * @return self
     */
    public function setCartItemShopArticle(?\Conecto\FeratelDsi\Dtos\CartItemShopArticleType $cartItemShopArticle = null)
    {
        $this->cartItemShopArticle = $cartItemShopArticle;
        return $this;
    }
}

