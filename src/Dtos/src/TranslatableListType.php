<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing TranslatableListType
 *
 *
 * XSD Type: TranslatableList
 */
class TranslatableListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $translation
     */
    private $translation = [
        
    ];

    public function __construct(array $translation = null)
    {
        $this->translation = $translation;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToTranslation(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->translation[] = $translation;
        return $this;
    }

    /**
     * isset translation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTranslation($index)
    {
        return isset($this->translation[$index]);
    }

    /**
     * unset translation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTranslation($index)
    {
        unset($this->translation[$index]);
    }

    /**
     * Gets as translation
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Sets a new translation
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $translation
     * @return self
     */
    public function setTranslation(array $translation)
    {
        $this->translation = $translation;
        return $this;
    }
}

