<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGuestCardAssignmentsListType
 *
 *
 * XSD Type: BDGuestCardAssignmentsList
 */
class BDGuestCardAssignmentsListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[] $guestCard
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
     * @param \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType $guestCard
     */
    public function addToGuestCard(\Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType $guestCard)
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
     * @return \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[]
     */
    public function getGuestCard()
    {
        return $this->guestCard;
    }

    /**
     * Sets a new guestCard
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[] $guestCard
     * @return self
     */
    public function setGuestCard(array $guestCard)
    {
        $this->guestCard = $guestCard;
        return $this;
    }
}

