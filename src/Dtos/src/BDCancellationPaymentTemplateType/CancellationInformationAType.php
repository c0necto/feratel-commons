<?php

namespace Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType;

/**
 * Class representing CancellationInformationAType
 */
class CancellationInformationAType
{
    /**
     * @var bool $useOwnCancellationSettings
     */
    private $useOwnCancellationSettings = null;

    /**
     * @var bool $freeCancellation
     */
    private $freeCancellation = null;

    public function __construct(bool $useOwnCancellationSettings = null, bool $freeCancellation = null)
    {
        $this->useOwnCancellationSettings = $useOwnCancellationSettings;
        $this->freeCancellation = $freeCancellation;
    }

    /**
     * Gets as useOwnCancellationSettings
     *
     * @return bool
     */
    public function getUseOwnCancellationSettings()
    {
        return $this->useOwnCancellationSettings;
    }

    /**
     * Sets a new useOwnCancellationSettings
     *
     * @param bool $useOwnCancellationSettings
     * @return self
     */
    public function setUseOwnCancellationSettings($useOwnCancellationSettings)
    {
        $this->useOwnCancellationSettings = $useOwnCancellationSettings;
        return $this;
    }

    /**
     * Gets as freeCancellation
     *
     * @return bool
     */
    public function getFreeCancellation()
    {
        return $this->freeCancellation;
    }

    /**
     * Sets a new freeCancellation
     *
     * @param bool $freeCancellation
     * @return self
     */
    public function setFreeCancellation($freeCancellation)
    {
        $this->freeCancellation = $freeCancellation;
        return $this;
    }
}

