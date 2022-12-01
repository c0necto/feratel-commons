<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalProductItemType
 *
 *
 * XSD Type: BDAdditionalProductItem
 */
class BDAdditionalProductItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var bool $packageOnly
     */
    private $packageOnly = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalProductDetailsType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DocumentType[] $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LinkType[] $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType $price
     */
    private $price = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceDetailType $priceDetail
     */
    private $priceDetail = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[] $salesRuleTemplates
     */
    private $salesRuleTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentTemplates
     */
    private $cancellationPaymentTemplates = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, bool $packageOnly = null, \Conecto\FeratelDsi\Dtos\BDAdditionalProductDetailsType $details = null, array $documents = null, array $descriptions = null, array $links = null, \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType $price = null, \Conecto\FeratelDsi\Dtos\BDAdditionalPriceDetailType $priceDetail = null, array $salesRuleTemplates = null, array $cancellationPaymentTemplates = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->packageOnly = $packageOnly;
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->price = $price;
        $this->priceDetail = $priceDetail;
        $this->salesRuleTemplates = $salesRuleTemplates;
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
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
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as packageOnly
     *
     * @return bool
     */
    public function getPackageOnly()
    {
        return $this->packageOnly;
    }

    /**
     * Sets a new packageOnly
     *
     * @param bool $packageOnly
     * @return self
     */
    public function setPackageOnly($packageOnly)
    {
        $this->packageOnly = $packageOnly;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalProductDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDAdditionalProductDetailsType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as document
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DocumentType $document
     */
    public function addToDocuments(\Conecto\FeratelDsi\Dtos\DocumentType $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * isset documents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocuments($index)
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents
     *
     * @return \Conecto\FeratelDsi\Dtos\DocumentType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\DocumentType[] $documents
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as link
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LinkType $link
     */
    public function addToLinks(\Conecto\FeratelDsi\Dtos\LinkType $link)
    {
        $this->links[] = $link;
        return $this;
    }

    /**
     * isset links
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinks($index)
    {
        return isset($this->links[$index]);
    }

    /**
     * unset links
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinks($index)
    {
        unset($this->links[$index]);
    }

    /**
     * Gets as links
     *
     * @return \Conecto\FeratelDsi\Dtos\LinkType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\LinkType[] $links
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType $price
     * @return self
     */
    public function setPrice(?\Conecto\FeratelDsi\Dtos\BDAdditionalPriceType $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as priceDetail
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceDetailType
     */
    public function getPriceDetail()
    {
        return $this->priceDetail;
    }

    /**
     * Sets a new priceDetail
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceDetailType $priceDetail
     * @return self
     */
    public function setPriceDetail(?\Conecto\FeratelDsi\Dtos\BDAdditionalPriceDetailType $priceDetail = null)
    {
        $this->priceDetail = $priceDetail;
        return $this;
    }

    /**
     * Adds as salesRuleTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType $salesRuleTemplate
     */
    public function addToSalesRuleTemplates(\Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType $salesRuleTemplate)
    {
        $this->salesRuleTemplates[] = $salesRuleTemplate;
        return $this;
    }

    /**
     * isset salesRuleTemplates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesRuleTemplates($index)
    {
        return isset($this->salesRuleTemplates[$index]);
    }

    /**
     * unset salesRuleTemplates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesRuleTemplates($index)
    {
        unset($this->salesRuleTemplates[$index]);
    }

    /**
     * Gets as salesRuleTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[]
     */
    public function getSalesRuleTemplates()
    {
        return $this->salesRuleTemplates;
    }

    /**
     * Sets a new salesRuleTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[] $salesRuleTemplates
     * @return self
     */
    public function setSalesRuleTemplates(array $salesRuleTemplates = null)
    {
        $this->salesRuleTemplates = $salesRuleTemplates;
        return $this;
    }

    /**
     * Adds as cancellationPaymentTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate
     */
    public function addToCancellationPaymentTemplates(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate)
    {
        $this->cancellationPaymentTemplates[] = $cancellationPaymentTemplate;
        return $this;
    }

    /**
     * isset cancellationPaymentTemplates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationPaymentTemplates($index)
    {
        return isset($this->cancellationPaymentTemplates[$index]);
    }

    /**
     * unset cancellationPaymentTemplates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationPaymentTemplates($index)
    {
        unset($this->cancellationPaymentTemplates[$index]);
    }

    /**
     * Gets as cancellationPaymentTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[]
     */
    public function getCancellationPaymentTemplates()
    {
        return $this->cancellationPaymentTemplates;
    }

    /**
     * Sets a new cancellationPaymentTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentTemplates
     * @return self
     */
    public function setCancellationPaymentTemplates(array $cancellationPaymentTemplates = null)
    {
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        return $this;
    }
}

