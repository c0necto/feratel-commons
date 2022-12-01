<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CheckEffectUserItemType
 *
 *
 * XSD Type: CheckEffectUserItem
 */
class CheckEffectUserItemType
{
    /**
     * @var string $cECode
     */
    private $cECode = null;

    /**
     * @var string $pOS
     */
    private $pOS = null;

    /**
     * @var string $rangeCode
     */
    private $rangeCode = null;

    /**
     * @var string $rangeId
     */
    private $rangeId = null;

    public function __construct(string $cECode = null, string $pOS = null, string $rangeCode = null, string $rangeId = null)
    {
        $this->cECode = $cECode;
        $this->pOS = $pOS;
        $this->rangeCode = $rangeCode;
        $this->rangeId = $rangeId;
    }

    /**
     * Gets as cECode
     *
     * @return string
     */
    public function getCECode()
    {
        return $this->cECode;
    }

    /**
     * Sets a new cECode
     *
     * @param string $cECode
     * @return self
     */
    public function setCECode($cECode)
    {
        $this->cECode = $cECode;
        return $this;
    }

    /**
     * Gets as pOS
     *
     * @return string
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * @param string $pOS
     * @return self
     */
    public function setPOS($pOS)
    {
        $this->pOS = $pOS;
        return $this;
    }

    /**
     * Gets as rangeCode
     *
     * @return string
     */
    public function getRangeCode()
    {
        return $this->rangeCode;
    }

    /**
     * Sets a new rangeCode
     *
     * @param string $rangeCode
     * @return self
     */
    public function setRangeCode($rangeCode)
    {
        $this->rangeCode = $rangeCode;
        return $this;
    }

    /**
     * Gets as rangeId
     *
     * @return string
     */
    public function getRangeId()
    {
        return $this->rangeId;
    }

    /**
     * Sets a new rangeId
     *
     * @param string $rangeId
     * @return self
     */
    public function setRangeId($rangeId)
    {
        $this->rangeId = $rangeId;
        return $this;
    }
}

