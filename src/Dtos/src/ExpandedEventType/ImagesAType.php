<?php

namespace Conecto\FeratelDsi\Dtos\ExpandedEventType;

/**
 * Class representing ImagesAType
 */
class ImagesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\EventCalendarImageType[] $image
     */
    private $image = [
        
    ];

    public function __construct(array $image = null)
    {
        $this->image = $image;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\EventCalendarImageType $image
     */
    public function addToImage(\Conecto\FeratelDsi\Dtos\EventCalendarImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * @return \Conecto\FeratelDsi\Dtos\EventCalendarImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \Conecto\FeratelDsi\Dtos\EventCalendarImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }
}

