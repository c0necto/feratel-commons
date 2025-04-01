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

    /**
     * @var bool $includeDescriptions
     */
    private $includeDescriptions = null;

    public function __construct(bool $includeResolution = null, bool $includeDescriptions = null, array $systems = null, \DateTime $dateFrom = null)
    {
        $this->includeResolution = $includeResolution;
        $this->includeDescriptions = $includeDescriptions;
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

    /**
     * Gets as includeDescriptions
     *
     * @return bool
     */
    public function getIncludeDescriptions()
    {
        return $this->includeDescriptions;
    }

    /**
     * Sets a new includeDescriptions
     *
     * @param bool $includeDescriptions
     * @return self
     */
    public function setIncludeDescriptions($includeDescriptions)
    {
        $this->includeDescriptions = $includeDescriptions;
        return $this;
    }
}

