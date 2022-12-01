<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDShopItemsType
 *
 * Defines basic data elements for shop item level requested.
 * XSD Type: BDShopItemsType
 */
class BDShopItemsType extends BasicInfoType
{
    /**
     * Provides parameters information for service level for request of basic data.
     *
     * @var \Conecto\FeratelDsi\Dtos\BasicInfoType $variations
     */
    private $variations = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicInfoType $variations = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->variations = $variations;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as variations
     *
     * Provides parameters information for service level for request of basic data.
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicInfoType
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Sets a new variations
     *
     * Provides parameters information for service level for request of basic data.
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicInfoType $variations
     * @return self
     */
    public function setVariations(?\Conecto\FeratelDsi\Dtos\BasicInfoType $variations = null)
    {
        $this->variations = $variations;
        return $this;
    }
}

