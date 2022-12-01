<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing UpdateShoppingCartSettingsType
 *
 *
 * XSD Type: UpdateShoppingCartSettingsType
 */
class UpdateShoppingCartSettingsType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $wishNotes
     */
    private $wishNotes = null;

    /**
     * @var string $notes
     */
    private $notes = null;

    /**
     * @var string $accompaniedBy
     */
    private $accompaniedBy = null;

    /**
     * @var bool $cancellationInsuranceChecked
     */
    private $cancellationInsuranceChecked = null;

    /**
     * @var bool $useBookingFee
     */
    private $useBookingFee = null;

    /**
     * @var bool $settlerIsTourOperator
     */
    private $settlerIsTourOperator = null;

    /**
     * @var string $promotionCode
     */
    private $promotionCode = null;

    public function __construct(string $id = null, string $wishNotes = null, string $notes = null, string $accompaniedBy = null, bool $cancellationInsuranceChecked = null, bool $useBookingFee = null, bool $settlerIsTourOperator = null, string $promotionCode = null)
    {
        $this->id = $id;
        $this->wishNotes = $wishNotes;
        $this->notes = $notes;
        $this->accompaniedBy = $accompaniedBy;
        $this->cancellationInsuranceChecked = $cancellationInsuranceChecked;
        $this->useBookingFee = $useBookingFee;
        $this->settlerIsTourOperator = $settlerIsTourOperator;
        $this->promotionCode = $promotionCode;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as wishNotes
     *
     * @return string
     */
    public function getWishNotes()
    {
        return $this->wishNotes;
    }

    /**
     * Sets a new wishNotes
     *
     * @param string $wishNotes
     * @return self
     */
    public function setWishNotes($wishNotes)
    {
        $this->wishNotes = $wishNotes;
        return $this;
    }

    /**
     * Gets as notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as accompaniedBy
     *
     * @return string
     */
    public function getAccompaniedBy()
    {
        return $this->accompaniedBy;
    }

    /**
     * Sets a new accompaniedBy
     *
     * @param string $accompaniedBy
     * @return self
     */
    public function setAccompaniedBy($accompaniedBy)
    {
        $this->accompaniedBy = $accompaniedBy;
        return $this;
    }

    /**
     * Gets as cancellationInsuranceChecked
     *
     * @return bool
     */
    public function getCancellationInsuranceChecked()
    {
        return $this->cancellationInsuranceChecked;
    }

    /**
     * Sets a new cancellationInsuranceChecked
     *
     * @param bool $cancellationInsuranceChecked
     * @return self
     */
    public function setCancellationInsuranceChecked($cancellationInsuranceChecked)
    {
        $this->cancellationInsuranceChecked = $cancellationInsuranceChecked;
        return $this;
    }

    /**
     * Gets as useBookingFee
     *
     * @return bool
     */
    public function getUseBookingFee()
    {
        return $this->useBookingFee;
    }

    /**
     * Sets a new useBookingFee
     *
     * @param bool $useBookingFee
     * @return self
     */
    public function setUseBookingFee($useBookingFee)
    {
        $this->useBookingFee = $useBookingFee;
        return $this;
    }

    /**
     * Gets as settlerIsTourOperator
     *
     * @return bool
     */
    public function getSettlerIsTourOperator()
    {
        return $this->settlerIsTourOperator;
    }

    /**
     * Sets a new settlerIsTourOperator
     *
     * @param bool $settlerIsTourOperator
     * @return self
     */
    public function setSettlerIsTourOperator($settlerIsTourOperator)
    {
        $this->settlerIsTourOperator = $settlerIsTourOperator;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }
}

