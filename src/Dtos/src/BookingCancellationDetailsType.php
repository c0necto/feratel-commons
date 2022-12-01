<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingCancellationDetailsType
 *
 *
 * XSD Type: BookingCancellationDetails
 */
class BookingCancellationDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[] $cancellationInformation
     */
    private $cancellationInformation = [
        
    ];

    public function __construct(array $cancellationInformation = null)
    {
        $this->cancellationInformation = $cancellationInformation;
    }

    /**
     * Adds as cancellationInformation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType $cancellationInformation
     */
    public function addToCancellationInformation(\Conecto\FeratelDsi\Dtos\BookingCancellationInformationType $cancellationInformation)
    {
        $this->cancellationInformation[] = $cancellationInformation;
        return $this;
    }

    /**
     * isset cancellationInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInformation($index)
    {
        return isset($this->cancellationInformation[$index]);
    }

    /**
     * unset cancellationInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInformation($index)
    {
        unset($this->cancellationInformation[$index]);
    }

    /**
     * Gets as cancellationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[]
     */
    public function getCancellationInformation()
    {
        return $this->cancellationInformation;
    }

    /**
     * Sets a new cancellationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[] $cancellationInformation
     * @return self
     */
    public function setCancellationInformation(array $cancellationInformation = null)
    {
        $this->cancellationInformation = $cancellationInformation;
        return $this;
    }
}

