<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicSystemDocumentElementType
 *
 *
 * XSD Type: BasicSystemDocumentElementType
 */
class BasicSystemDocumentElementType extends BasicSystemElementType
{
    /**
     * @var bool $includeResolution
     */
    private $includeResolution = null;

    public function __construct(bool $includeResolution = null, array $systems = null, \DateTime $dateFrom = null)
    {
        $this->includeResolution = $includeResolution;
        parent::__construct($systems,$dateFrom);
    }

    /**
     * Gets as includeResolution
     *
     * @return bool
     */
    public function getIncludeResolution()
    {
        return $this->includeResolution;
    }

    /**
     * Sets a new includeResolution
     *
     * @param bool $includeResolution
     * @return self
     */
    public function setIncludeResolution($includeResolution)
    {
        $this->includeResolution = $includeResolution;
        return $this;
    }
}

