<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType;

/**
 * Class representing GuestCardsAType
 */
class GuestCardsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[] $guestCard
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType $guestCard
     */
    public function addToGuestCard(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType $guestCard)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[]
     */
    public function getGuestCard()
    {
        return $this->guestCard;
    }

    /**
     * Sets a new guestCard
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[] $guestCard
     * @return self
     */
    public function setGuestCard(array $guestCard = null)
    {
        $this->guestCard = $guestCard;
        return $this;
    }
}

