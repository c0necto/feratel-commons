<?php

namespace Conecto\FeratelDsi\Dtos\BDInfrastructureType;

use Conecto\FeratelDsi\Dtos\BasicSystemElementType;

/**
 * Class representing DetailsAType
 */
class DetailsAType extends BasicSystemElementType
{
    /**
     * @var bool $includeMainTopicId
     */
    private $includeMainTopicId = null;

    public function __construct(bool $includeMainTopicId = null, array $systems = null, \DateTime $dateFrom = null)
    {
        $this->includeMainTopicId = $includeMainTopicId;
        parent::__construct($systems,$dateFrom);
    }

    /**
     * Gets as includeMainTopicId
     *
     * @return bool
     */
    public function getIncludeMainTopicId()
    {
        return $this->includeMainTopicId;
    }

    /**
     * Sets a new includeMainTopicId
     *
     * @param bool $includeMainTopicId
     * @return self
     */
    public function setIncludeMainTopicId($includeMainTopicId)
    {
        $this->includeMainTopicId = $includeMainTopicId;
        return $this;
    }
}

