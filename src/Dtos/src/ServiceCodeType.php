<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ServiceCodeType
 *
 *
 * XSD Type: ServiceCodeType
 */
class ServiceCodeType
{
    /**
     * @var string $serviceType
     */
    private $serviceType = null;

    /**
     * @var string $codeType
     */
    private $codeType = null;

    /**
     * @var string $srcCode
     */
    private $srcCode = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    public function __construct(string $serviceType = null, string $codeType = null, string $srcCode = null, \DateTime $changeDate = null, array $name = null)
    {
        $this->serviceType = $serviceType;
        $this->codeType = $codeType;
        $this->srcCode = $srcCode;
        $this->changeDate = $changeDate;
        $this->name = $name;
    }

    /**
     * Gets as serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * @param string $serviceType
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as codeType
     *
     * @return string
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Sets a new codeType
     *
     * @param string $codeType
     * @return self
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * Gets as srcCode
     *
     * @return string
     */
    public function getSrcCode()
    {
        return $this->srcCode;
    }

    /**
     * Sets a new srcCode
     *
     * @param string $srcCode
     * @return self
     */
    public function setSrcCode($srcCode)
    {
        $this->srcCode = $srcCode;
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
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToName(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->name[] = $translation;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }
}

