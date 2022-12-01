<?php

namespace Conecto\FeratelDsi\Dtos\SkidataItemListType;

/**
 * Class representing SkidataItemAType
 */
class SkidataItemAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\PersonAType $person
     */
    private $person = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\KeyCardAType $keyCard
     */
    private $keyCard = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\PersonAType $person = null, \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\KeyCardAType $keyCard = null)
    {
        $this->person = $person;
        $this->keyCard = $keyCard;
    }

    /**
     * Gets as person
     *
     * @return \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\PersonAType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\PersonAType $person
     * @return self
     */
    public function setPerson(\Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\PersonAType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as keyCard
     *
     * @return \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\KeyCardAType
     */
    public function getKeyCard()
    {
        return $this->keyCard;
    }

    /**
     * Sets a new keyCard
     *
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\KeyCardAType $keyCard
     * @return self
     */
    public function setKeyCard(?\Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType\KeyCardAType $keyCard = null)
    {
        $this->keyCard = $keyCard;
        return $this;
    }
}

