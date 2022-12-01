<?php

namespace Conecto\FeratelDsi\Dtos\RequestType;

/**
 * Class representing GetStandardInformationFormAType
 */
class GetStandardInformationFormAType
{
    /**
     * @var string $organisationCode
     */
    private $organisationCode = null;

    /**
     * @var string $type
     */
    private $type = null;

    public function __construct(string $organisationCode = null, string $type = null)
    {
        $this->organisationCode = $organisationCode;
        $this->type = $type;
    }

    /**
     * Gets as organisationCode
     *
     * @return string
     */
    public function getOrganisationCode()
    {
        return $this->organisationCode;
    }

    /**
     * Sets a new organisationCode
     *
     * @param string $organisationCode
     * @return self
     */
    public function setOrganisationCode($organisationCode)
    {
        $this->organisationCode = $organisationCode;
        return $this;
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
}

