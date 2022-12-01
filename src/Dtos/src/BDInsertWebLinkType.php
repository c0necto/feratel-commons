<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInsertWebLinkType
 *
 *
 * XSD Type: BDInsertWebLinkType
 */
class BDInsertWebLinkType
{
    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var string $serviceProviderId
     */
    private $serviceProviderId = null;

    /**
     * @var string $linkName
     */
    private $linkName = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    public function __construct(string $dBCode = null, string $serviceProviderId = null, string $linkName = null, string $uRL = null)
    {
        $this->dBCode = $dBCode;
        $this->serviceProviderId = $serviceProviderId;
        $this->linkName = $linkName;
        $this->uRL = $uRL;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Sets a new serviceProviderId
     *
     * @param string $serviceProviderId
     * @return self
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Gets as linkName
     *
     * @return string
     */
    public function getLinkName()
    {
        return $this->linkName;
    }

    /**
     * Sets a new linkName
     *
     * @param string $linkName
     * @return self
     */
    public function setLinkName($linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }
}

