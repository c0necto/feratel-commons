<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDArrivalDepartureTemplateListType
 *
 *
 * XSD Type: BDArrivalDepartureTemplateList
 */
class BDArrivalDepartureTemplateListType
{
    /**
     * @var bool $minStayFromArrivalDay
     */
    private $minStayFromArrivalDay = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateType[] $arrivalDepartureTemplate
     */
    private $arrivalDepartureTemplate = [
        
    ];

    public function __construct(bool $minStayFromArrivalDay = null, array $arrivalDepartureTemplate = null)
    {
        $this->minStayFromArrivalDay = $minStayFromArrivalDay;
        $this->arrivalDepartureTemplate = $arrivalDepartureTemplate;
    }

    /**
     * Gets as minStayFromArrivalDay
     *
     * @return bool
     */
    public function getMinStayFromArrivalDay()
    {
        return $this->minStayFromArrivalDay;
    }

    /**
     * Sets a new minStayFromArrivalDay
     *
     * @param bool $minStayFromArrivalDay
     * @return self
     */
    public function setMinStayFromArrivalDay($minStayFromArrivalDay)
    {
        $this->minStayFromArrivalDay = $minStayFromArrivalDay;
        return $this;
    }

    /**
     * Adds as arrivalDepartureTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateType $arrivalDepartureTemplate
     */
    public function addToArrivalDepartureTemplate(\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateType $arrivalDepartureTemplate)
    {
        $this->arrivalDepartureTemplate[] = $arrivalDepartureTemplate;
        return $this;
    }

    /**
     * isset arrivalDepartureTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArrivalDepartureTemplate($index)
    {
        return isset($this->arrivalDepartureTemplate[$index]);
    }

    /**
     * unset arrivalDepartureTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArrivalDepartureTemplate($index)
    {
        unset($this->arrivalDepartureTemplate[$index]);
    }

    /**
     * Gets as arrivalDepartureTemplate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateType[]
     */
    public function getArrivalDepartureTemplate()
    {
        return $this->arrivalDepartureTemplate;
    }

    /**
     * Sets a new arrivalDepartureTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateType[] $arrivalDepartureTemplate
     * @return self
     */
    public function setArrivalDepartureTemplate(array $arrivalDepartureTemplate = null)
    {
        $this->arrivalDepartureTemplate = $arrivalDepartureTemplate;
        return $this;
    }
}

