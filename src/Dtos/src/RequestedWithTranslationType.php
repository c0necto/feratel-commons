<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestedWithTranslationType
 *
 *
 * XSD Type: RequestedWithTranslationType
 */
class RequestedWithTranslationType extends RequestedType
{
    /**
     * @var bool $includeTranslations
     */
    private $includeTranslations = null;

    public function __construct(bool $includeTranslations = null, bool $show = null, string $id = null)
    {
        $this->includeTranslations = $includeTranslations;
        parent::__construct($show,$id);
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

