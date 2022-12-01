<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDArrivalDepartureTemplateConditionListType
 *
 *
 * XSD Type: BDArrivalDepartureTemplateConditionList
 */
class BDArrivalDepartureTemplateConditionListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[] $condition
     */
    private $condition = [
        
    ];

    public function __construct(array $condition = null)
    {
        $this->condition = $condition;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType $condition
     */
    public function addToCondition(\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
}

