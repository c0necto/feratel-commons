<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXBasicDataType
 *
 *
 * XSD Type: ONAXBasicDataType
 */
class ONAXBasicDataType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[] $serviceProviderList
     */
    private $serviceProviderList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[] $serviceList
     */
    private $serviceList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXProductItemType[] $productList
     */
    private $productList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressItemType[] $addressList
     */
    private $addressList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[] $addressLinkList
     */
    private $addressLinkList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[] $addressBankAccountList
     */
    private $addressBankAccountList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[] $addressIndividualFieldList
     */
    private $addressIndividualFieldList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[] $addressContactList
     */
    private $addressContactList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[] $addressContactCodeList
     */
    private $addressContactCodeList = null;

    public function __construct(array $serviceProviderList = null, array $serviceList = null, array $productList = null, array $addressList = null, array $addressLinkList = null, array $addressBankAccountList = null, array $addressIndividualFieldList = null, array $addressContactList = null, array $addressContactCodeList = null)
    {
        $this->serviceProviderList = $serviceProviderList;
        $this->serviceList = $serviceList;
        $this->productList = $productList;
        $this->addressList = $addressList;
        $this->addressLinkList = $addressLinkList;
        $this->addressBankAccountList = $addressBankAccountList;
        $this->addressIndividualFieldList = $addressIndividualFieldList;
        $this->addressContactList = $addressContactList;
        $this->addressContactCodeList = $addressContactCodeList;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType $serviceProvider
     */
    public function addToServiceProviderList(\Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType $serviceProvider)
    {
        $this->serviceProviderList[] = $serviceProvider;
        return $this;
    }

    /**
     * isset serviceProviderList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderList($index)
    {
        return isset($this->serviceProviderList[$index]);
    }

    /**
     * unset serviceProviderList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderList($index)
    {
        unset($this->serviceProviderList[$index]);
    }

    /**
     * Gets as serviceProviderList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[]
     */
    public function getServiceProviderList()
    {
        return $this->serviceProviderList;
    }

    /**
     * Sets a new serviceProviderList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[] $serviceProviderList
     * @return self
     */
    public function setServiceProviderList(array $serviceProviderList)
    {
        $this->serviceProviderList = $serviceProviderList;
        return $this;
    }

    /**
     * Adds as service
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceItemType $service
     */
    public function addToServiceList(\Conecto\FeratelDsi\Dtos\ONAXServiceItemType $service)
    {
        $this->serviceList[] = $service;
        return $this;
    }

    /**
     * isset serviceList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceList($index)
    {
        return isset($this->serviceList[$index]);
    }

    /**
     * unset serviceList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceList($index)
    {
        unset($this->serviceList[$index]);
    }

    /**
     * Gets as serviceList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[]
     */
    public function getServiceList()
    {
        return $this->serviceList;
    }

    /**
     * Sets a new serviceList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[] $serviceList
     * @return self
     */
    public function setServiceList(array $serviceList)
    {
        $this->serviceList = $serviceList;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXProductItemType $product
     */
    public function addToProductList(\Conecto\FeratelDsi\Dtos\ONAXProductItemType $product)
    {
        $this->productList[] = $product;
        return $this;
    }

    /**
     * isset productList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductList($index)
    {
        return isset($this->productList[$index]);
    }

    /**
     * unset productList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductList($index)
    {
        unset($this->productList[$index]);
    }

    /**
     * Gets as productList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXProductItemType[]
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * Sets a new productList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXProductItemType[] $productList
     * @return self
     */
    public function setProductList(array $productList)
    {
        $this->productList = $productList;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressItemType $address
     */
    public function addToAddressList(\Conecto\FeratelDsi\Dtos\ONAXAddressItemType $address)
    {
        $this->addressList[] = $address;
        return $this;
    }

    /**
     * isset addressList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressList($index)
    {
        return isset($this->addressList[$index]);
    }

    /**
     * unset addressList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressList($index)
    {
        unset($this->addressList[$index]);
    }

    /**
     * Gets as addressList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressItemType[]
     */
    public function getAddressList()
    {
        return $this->addressList;
    }

    /**
     * Sets a new addressList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressItemType[] $addressList
     * @return self
     */
    public function setAddressList(array $addressList)
    {
        $this->addressList = $addressList;
        return $this;
    }

    /**
     * Adds as addressLink
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType $addressLink
     */
    public function addToAddressLinkList(\Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType $addressLink)
    {
        $this->addressLinkList[] = $addressLink;
        return $this;
    }

    /**
     * isset addressLinkList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLinkList($index)
    {
        return isset($this->addressLinkList[$index]);
    }

    /**
     * unset addressLinkList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLinkList($index)
    {
        unset($this->addressLinkList[$index]);
    }

    /**
     * Gets as addressLinkList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[]
     */
    public function getAddressLinkList()
    {
        return $this->addressLinkList;
    }

    /**
     * Sets a new addressLinkList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[] $addressLinkList
     * @return self
     */
    public function setAddressLinkList(array $addressLinkList)
    {
        $this->addressLinkList = $addressLinkList;
        return $this;
    }

    /**
     * Adds as addressBankAccount
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType $addressBankAccount
     */
    public function addToAddressBankAccountList(\Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType $addressBankAccount)
    {
        $this->addressBankAccountList[] = $addressBankAccount;
        return $this;
    }

    /**
     * isset addressBankAccountList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressBankAccountList($index)
    {
        return isset($this->addressBankAccountList[$index]);
    }

    /**
     * unset addressBankAccountList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressBankAccountList($index)
    {
        unset($this->addressBankAccountList[$index]);
    }

    /**
     * Gets as addressBankAccountList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[]
     */
    public function getAddressBankAccountList()
    {
        return $this->addressBankAccountList;
    }

    /**
     * Sets a new addressBankAccountList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressBankAccountItemType[] $addressBankAccountList
     * @return self
     */
    public function setAddressBankAccountList(array $addressBankAccountList)
    {
        $this->addressBankAccountList = $addressBankAccountList;
        return $this;
    }

    /**
     * Adds as addressIndividualField
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType $addressIndividualField
     */
    public function addToAddressIndividualFieldList(\Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType $addressIndividualField)
    {
        $this->addressIndividualFieldList[] = $addressIndividualField;
        return $this;
    }

    /**
     * isset addressIndividualFieldList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressIndividualFieldList($index)
    {
        return isset($this->addressIndividualFieldList[$index]);
    }

    /**
     * unset addressIndividualFieldList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressIndividualFieldList($index)
    {
        unset($this->addressIndividualFieldList[$index]);
    }

    /**
     * Gets as addressIndividualFieldList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[]
     */
    public function getAddressIndividualFieldList()
    {
        return $this->addressIndividualFieldList;
    }

    /**
     * Sets a new addressIndividualFieldList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[] $addressIndividualFieldList
     * @return self
     */
    public function setAddressIndividualFieldList(array $addressIndividualFieldList)
    {
        $this->addressIndividualFieldList = $addressIndividualFieldList;
        return $this;
    }

    /**
     * Adds as addressContact
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType $addressContact
     */
    public function addToAddressContactList(\Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType $addressContact)
    {
        $this->addressContactList[] = $addressContact;
        return $this;
    }

    /**
     * isset addressContactList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressContactList($index)
    {
        return isset($this->addressContactList[$index]);
    }

    /**
     * unset addressContactList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressContactList($index)
    {
        unset($this->addressContactList[$index]);
    }

    /**
     * Gets as addressContactList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[]
     */
    public function getAddressContactList()
    {
        return $this->addressContactList;
    }

    /**
     * Sets a new addressContactList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[] $addressContactList
     * @return self
     */
    public function setAddressContactList(array $addressContactList)
    {
        $this->addressContactList = $addressContactList;
        return $this;
    }

    /**
     * Adds as addressContactCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType $addressContactCode
     */
    public function addToAddressContactCodeList(\Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType $addressContactCode)
    {
        $this->addressContactCodeList[] = $addressContactCode;
        return $this;
    }

    /**
     * isset addressContactCodeList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressContactCodeList($index)
    {
        return isset($this->addressContactCodeList[$index]);
    }

    /**
     * unset addressContactCodeList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressContactCodeList($index)
    {
        unset($this->addressContactCodeList[$index]);
    }

    /**
     * Gets as addressContactCodeList
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[]
     */
    public function getAddressContactCodeList()
    {
        return $this->addressContactCodeList;
    }

    /**
     * Sets a new addressContactCodeList
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[] $addressContactCodeList
     * @return self
     */
    public function setAddressContactCodeList(array $addressContactCodeList)
    {
        $this->addressContactCodeList = $addressContactCodeList;
        return $this;
    }
}

