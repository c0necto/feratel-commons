<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicInfoType
 *
 *
 * XSD Type: BasicInfoType
 */
class BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links
     */
    private $links = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as documents
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents
     * @return self
     */
    public function setDocuments(?\Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     * @return self
     */
    public function setDescriptions(?\Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Gets as links
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementLinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links
     * @return self
     */
    public function setLinks(?\Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->links = $links;
        return $this;
    }
}

