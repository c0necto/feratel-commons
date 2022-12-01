<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDDescriptionsFilterType
 *
 *
 * XSD Type: BDDescriptionsFilterType
 */
class BDDescriptionsFilterType extends BasicSystemElementType
{
    /**
     * @var bool $markup
     */
    private $markup = null;

    public function __construct(bool $markup = null, array $systems = null, \DateTime $dateFrom = null)
    {
        $this->markup = $markup;
        parent::__construct($systems,$dateFrom);
    }

    /**
     * Gets as markup
     *
     * @return bool
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Sets a new markup
     *
     * @param bool $markup
     * @return self
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
        return $this;
    }
}

