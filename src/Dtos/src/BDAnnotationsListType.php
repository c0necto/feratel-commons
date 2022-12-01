<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAnnotationsListType
 *
 *
 * XSD Type: BDAnnotationsList
 */
class BDAnnotationsListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[] $annotation
     */
    private $annotation = [
        
    ];

    public function __construct(array $annotation = null)
    {
        $this->annotation = $annotation;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType $annotation
     */
    public function addToAnnotation(\Conecto\FeratelDsi\Dtos\BDAnnotationsItemType $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }
}

