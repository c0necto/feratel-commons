<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDProductValidDatesType
 *
 *
 * XSD Type: BDProductValidDates
 */
class BDProductValidDatesType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductValidDateType[] $validDate
     */
    private $validDate = [
        
    ];

    public function __construct(string $type = null, array $validDate = null)
    {
        $this->type = $type;
        $this->validDate = $validDate;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as validDate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDProductValidDateType $validDate
     */
    public function addToValidDate(\Conecto\FeratelDsi\Dtos\BDProductValidDateType $validDate)
    {
        $this->validDate[] = $validDate;
        return $this;
    }

    /**
     * isset validDate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidDate($index)
    {
        return isset($this->validDate[$index]);
    }

    /**
     * unset validDate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidDate($index)
    {
        unset($this->validDate[$index]);
    }

    /**
     * Gets as validDate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDProductValidDateType[]
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDProductValidDateType[] $validDate
     * @return self
     */
    public function setValidDate(array $validDate = null)
    {
        $this->validDate = $validDate;
        return $this;
    }
}

