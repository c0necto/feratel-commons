<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapClassificationsListType
 *
 *
 * XSD Type: HandicapClassificationsList
 */
class HandicapClassificationsListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $handicapClassification
     */
    private $handicapClassification = [
        
    ];

    public function __construct(array $handicapClassification = null)
    {
        $this->handicapClassification = $handicapClassification;
    }

    /**
     * Adds as handicapClassification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $handicapClassification
     */
    public function addToHandicapClassification(\Conecto\FeratelDsi\Dtos\ClassificationType $handicapClassification)
    {
        $this->handicapClassification[] = $handicapClassification;
        return $this;
    }

    /**
     * isset handicapClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapClassification($index)
    {
        return isset($this->handicapClassification[$index]);
    }

    /**
     * unset handicapClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapClassification($index)
    {
        unset($this->handicapClassification[$index]);
    }

    /**
     * Gets as handicapClassification
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHandicapClassification()
    {
        return $this->handicapClassification;
    }

    /**
     * Sets a new handicapClassification
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $handicapClassification
     * @return self
     */
    public function setHandicapClassification(array $handicapClassification = null)
    {
        $this->handicapClassification = $handicapClassification;
        return $this;
    }
}

