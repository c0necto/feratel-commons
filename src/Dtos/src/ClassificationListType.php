<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ClassificationListType
 *
 *
 * XSD Type: ClassificationList
 */
class ClassificationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $classification
     */
    private $classification = [
        
    ];

    public function __construct(array $classification = null)
    {
        $this->classification = $classification;
    }

    /**
     * Adds as classification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $classification
     */
    public function addToClassification(\Conecto\FeratelDsi\Dtos\ClassificationType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }
}

