<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProvidersType;

/**
 * Class representing AddressesAType
 */
class AddressesAType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var bool $getSettlementAddresses
     */
    private $getSettlementAddresses = null;

    /**
     * @var bool $detailedInformation
     */
    private $detailedInformation = null;

    public function __construct(\DateTime $dateFrom = null, bool $getSettlementAddresses = null, bool $detailedInformation = null)
    {
        $this->dateFrom = $dateFrom;
        $this->getSettlementAddresses = $getSettlementAddresses;
        $this->detailedInformation = $detailedInformation;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as getSettlementAddresses
     *
     * @return bool
     */
    public function getGetSettlementAddresses()
    {
        return $this->getSettlementAddresses;
    }

    /**
     * Sets a new getSettlementAddresses
     *
     * @param bool $getSettlementAddresses
     * @return self
     */
    public function setGetSettlementAddresses($getSettlementAddresses)
    {
        $this->getSettlementAddresses = $getSettlementAddresses;
        return $this;
    }

    /**
     * Gets as detailedInformation
     *
     * @return bool
     */
    public function getDetailedInformation()
    {
        return $this->detailedInformation;
    }

    /**
     * Sets a new detailedInformation
     *
     * @param bool $detailedInformation
     * @return self
     */
    public function setDetailedInformation($detailedInformation)
    {
        $this->detailedInformation = $detailedInformation;
        return $this;
    }
}

