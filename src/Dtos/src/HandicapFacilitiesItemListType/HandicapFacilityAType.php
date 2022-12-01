<?php

namespace Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType;

use Conecto\FeratelDsi\Dtos\ItemType;

/**
 * Class representing HandicapFacilityAType
 */
class HandicapFacilityAType extends ItemType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $comment
     */
    private $comment = null;

    public function __construct(array $comment = null, string $id = null, string $name = null, float $value = null)
    {
        $this->comment = $comment;
        parent::__construct($id,$name,$value);
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToComment(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->comment[] = $translation;
        return $this;
    }

    /**
     * isset comment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

