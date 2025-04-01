<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DocumentDescriptionListType
 *
 * Defines list of descriptions for basic data.
 * XSD Type: DocumentDescriptionList
 */
class DocumentDescriptionListType
{
    /**
     * Defines description list's single item.
     *
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $description
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
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $description
     */
    public function addToDescription(\Conecto\FeratelDsi\Dtos\TranslatableItemType $description)
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
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
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
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

