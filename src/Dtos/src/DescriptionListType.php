<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DescriptionListType
 *
 * Defines list of descriptions for basic data.
 * XSD Type: DescriptionList
 */
class DescriptionListType
{
    /**
     * Defines description list's single item.
     *
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $description
     */
    private $description = [
        
    ];

    public function __construct(array $description = null)
    {
        $this->description = $description;
    }

    /**
     * Adds as description
     *
     * Defines description list's single item.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescription(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Defines description list's single item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Defines description list's single item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Defines description list's single item.
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Defines description list's single item.
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

