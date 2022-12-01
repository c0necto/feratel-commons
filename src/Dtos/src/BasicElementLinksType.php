<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicElementLinksType
 *
 *
 * XSD Type: BasicElementLinksType
 */
class BasicElementLinksType extends BasicElementType
{
    /**
     * @var bool $includeTranslations
     */
    private $includeTranslations = null;

    public function __construct(bool $includeTranslations = null, \DateTime $dateFrom = null)
    {
        $this->includeTranslations = $includeTranslations;
        parent::__construct($dateFrom);
    }

    /**
     * Gets as includeTranslations
     *
     * @return bool
     */
    public function getIncludeTranslations()
    {
        return $this->includeTranslations;
    }

    /**
     * Sets a new includeTranslations
     *
     * @param bool $includeTranslations
     * @return self
     */
    public function setIncludeTranslations($includeTranslations)
    {
        $this->includeTranslations = $includeTranslations;
        return $this;
    }
}

