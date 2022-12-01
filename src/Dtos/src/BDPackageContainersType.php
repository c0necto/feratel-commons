<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageContainersType
 *
 *
 * XSD Type: BDPackageContainersType
 */
class BDPackageContainersType extends BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $assignedProducts
     */
    private $assignedProducts = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $assignedProducts = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->assignedProducts = $assignedProducts;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as assignedProducts
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getAssignedProducts()
    {
        return $this->assignedProducts;
    }

    /**
     * Sets a new assignedProducts
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $assignedProducts
     * @return self
     */
    public function setAssignedProducts(?\Conecto\FeratelDsi\Dtos\BasicElementType $assignedProducts = null)
    {
        $this->assignedProducts = $assignedProducts;
        return $this;
    }
}

