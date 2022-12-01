<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ExpandedEventType
 *
 *
 * XSD Type: ExpandedEventType
 */
class ExpandedEventType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\EventCalendarImageType[] $images
     */
    private $images = null;

    /**
     * @var string $description
     */
    private $description = null;

    public function __construct(array $images = null, string $description = null)
    {
        $this->images = $images;
        $this->description = $description;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\EventCalendarImageType $image
     */
    public function addToImages(\Conecto\FeratelDsi\Dtos\EventCalendarImageType $image)
    {
        $this->images[] = $image;
        return $this;
    }

    /**
     * isset images
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImages($index)
    {
        return isset($this->images[$index]);
    }

    /**
     * unset images
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImages($index)
    {
        unset($this->images[$index]);
    }

    /**
     * Gets as images
     *
     * @return \Conecto\FeratelDsi\Dtos\EventCalendarImageType[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * @param \Conecto\FeratelDsi\Dtos\EventCalendarImageType[] $images
     * @return self
     */
    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}

