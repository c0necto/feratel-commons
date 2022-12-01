<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackagesType
 *
 * Defines basic data elements for packages requested.
 * XSD Type: BDPackagesType
 */
class BDPackagesType extends BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $contentDescriptions
     */
    private $contentDescriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionsType $sections
     */
    private $sections = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $prices = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $contentDescriptions = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionsType $sections = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->prices = $prices;
        $this->contentDescriptions = $contentDescriptions;
        $this->sections = $sections;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BasicElementType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as contentDescriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType
     */
    public function getContentDescriptions()
    {
        return $this->contentDescriptions;
    }

    /**
     * Sets a new contentDescriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $contentDescriptions
     * @return self
     */
    public function setContentDescriptions(?\Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $contentDescriptions = null)
    {
        $this->contentDescriptions = $contentDescriptions;
        return $this;
    }

    /**
     * Gets as sections
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionsType
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets a new sections
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionsType $sections
     * @return self
     */
    public function setSections(?\Conecto\FeratelDsi\Dtos\BDPackageSectionsType $sections = null)
    {
        $this->sections = $sections;
        return $this;
    }
}

