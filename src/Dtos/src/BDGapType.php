<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGapType
 *
 *
 * XSD Type: BDGap
 */
class BDGapType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AvailabilityType[] $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateListType $arrivalDepartureTemplates
     */
    private $arrivalDepartureTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGapPriceTemplatesListType $priceDetail
     */
    private $priceDetail = null;

    public function __construct(string $id = null, \DateTime $dateFrom = null, \DateTime $dateTo = null, \DateTime $changeDate = null, array $availabilities = null, \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateListType $arrivalDepartureTemplates = null, \Conecto\FeratelDsi\Dtos\BDGapPriceTemplatesListType $priceDetail = null)
    {
        $this->id = $id;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->changeDate = $changeDate;
        $this->availabilities = $availabilities;
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        $this->priceDetail = $priceDetail;
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
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Adds as availability
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityType $availability
     */
    public function addToAvailabilities(\Conecto\FeratelDsi\Dtos\AvailabilityType $availability)
    {
        $this->availabilities[] = $availability;
        return $this;
    }

    /**
     * isset availabilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailabilities($index)
    {
        return isset($this->availabilities[$index]);
    }

    /**
     * unset availabilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailabilities($index)
    {
        unset($this->availabilities[$index]);
    }

    /**
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\AvailabilityType[]
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityType[] $availabilities
     * @return self
     */
    public function setAvailabilities(array $availabilities = null)
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    /**
     * Gets as arrivalDepartureTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateListType
     */
    public function getArrivalDepartureTemplates()
    {
        return $this->arrivalDepartureTemplates;
    }

    /**
     * Sets a new arrivalDepartureTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateListType $arrivalDepartureTemplates
     * @return self
     */
    public function setArrivalDepartureTemplates(?\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateListType $arrivalDepartureTemplates = null)
    {
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        return $this;
    }

    /**
     * Gets as priceDetail
     *
     * @return \Conecto\FeratelDsi\Dtos\BDGapPriceTemplatesListType
     */
    public function getPriceDetail()
    {
        return $this->priceDetail;
    }

    /**
     * Sets a new priceDetail
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGapPriceTemplatesListType $priceDetail
     * @return self
     */
    public function setPriceDetail(\Conecto\FeratelDsi\Dtos\BDGapPriceTemplatesListType $priceDetail)
    {
        $this->priceDetail = $priceDetail;
        return $this;
    }
}

