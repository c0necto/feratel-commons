<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalProductsType
 *
 *
 * XSD Type: BDAdditionalProductsType
 */
class BDAdditionalProductsType extends BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $priceDetails
     */
    private $priceDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates
     */
    private $salesRuleTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates
     */
    private $cancellationPaymentTemplates = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $prices = null, \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $priceDetails = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->prices = $prices;
        $this->priceDetails = $priceDetails;
        $this->salesRuleTemplates = $salesRuleTemplates;
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as priceDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * Sets a new priceDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $priceDetails
     * @return self
     */
    public function setPriceDetails(?\Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $priceDetails = null)
    {
        $this->priceDetails = $priceDetails;
        return $this;
    }

    /**
     * Gets as salesRuleTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getSalesRuleTemplates()
    {
        return $this->salesRuleTemplates;
    }

    /**
     * Sets a new salesRuleTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates
     * @return self
     */
    public function setSalesRuleTemplates(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates = null)
    {
        $this->salesRuleTemplates = $salesRuleTemplates;
        return $this;
    }

    /**
     * Gets as cancellationPaymentTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getCancellationPaymentTemplates()
    {
        return $this->cancellationPaymentTemplates;
    }

    /**
     * Sets a new cancellationPaymentTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates
     * @return self
     */
    public function setCancellationPaymentTemplates(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates = null)
    {
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        return $this;
    }
}

