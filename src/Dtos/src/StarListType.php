<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing StarListType
 *
 *
 * XSD Type: StarList
 */
class StarListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $star
     */
    private $star = [
        
    ];

    public function __construct(array $star = null)
    {
        $this->star = $star;
    }

    /**
     * Adds as star
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $star
     */
    public function addToStar(\Conecto\FeratelDsi\Dtos\ClassificationType $star)
    {
        $this->star[] = $star;
        return $this;
    }

    /**
     * isset star
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStar($index)
    {
        return isset($this->star[$index]);
    }

    /**
     * unset star
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStar($index)
    {
        unset($this->star[$index]);
    }

    /**
     * Gets as star
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Sets a new star
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $star
     * @return self
     */
    public function setStar(array $star = null)
    {
        $this->star = $star;
        return $this;
    }
}

