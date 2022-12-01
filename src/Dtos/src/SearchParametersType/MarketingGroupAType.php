<?php

namespace Conecto\FeratelDsi\Dtos\SearchParametersType;

use Conecto\FeratelDsi\Dtos\ItemListType;

/**
 * Class representing MarketingGroupAType
 */
class MarketingGroupAType extends ItemListType
{
    /**
     * @var bool $logicalConnectionAND
     */
    private $logicalConnectionAND = null;

    public function __construct(bool $logicalConnectionAND = null, array $item = null)
    {
        $this->logicalConnectionAND = $logicalConnectionAND;
        parent::__construct($item);
    }

    /**
     * Gets as logicalConnectionAND
     *
     * @return bool
     */
    public function getLogicalConnectionAND()
    {
        return $this->logicalConnectionAND;
    }

    /**
     * Sets a new logicalConnectionAND
     *
     * @param bool $logicalConnectionAND
     * @return self
     */
    public function setLogicalConnectionAND($logicalConnectionAND)
    {
        $this->logicalConnectionAND = $logicalConnectionAND;
        return $this;
    }
}

