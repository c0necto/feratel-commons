<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVGuestCardTypeListType
 *
 *
 * XSD Type: KVGuestCardTypeList
 */
class KVGuestCardTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\KVGuestCardType[] $guestCard
     */
    private $guestCard = [
        
    ];

    public function __construct(array $guestCard = null)
    {
        $this->guestCard = $guestCard;
    }

    /**
     * Adds as guestCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVGuestCardType $guestCard
     */
    public function addToGuestCard(\Conecto\FeratelDsi\Dtos\KVGuestCardType $guestCard)
    {
        $this->guestCard[] = $guestCard;
        return $this;
    }

    /**
     * isset guestCard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCard($index)
    {
        return isset($this->guestCard[$index]);
    }

    /**
     * unset guestCard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCard($index)
    {
        unset($this->guestCard[$index]);
    }

    /**
     * Gets as guestCard
     *
     * @return \Conecto\FeratelDsi\Dtos\KVGuestCardType[]
     */
    public function getGuestCard()
    {
        return $this->guestCard;
    }

    /**
     * Sets a new guestCard
     *
     * @param \Conecto\FeratelDsi\Dtos\KVGuestCardType[] $guestCard
     * @return self
     */
    public function setGuestCard(array $guestCard = null)
    {
        $this->guestCard = $guestCard;
        return $this;
    }
}

