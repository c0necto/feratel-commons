<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLAddressType
 *
 *
 * XSD Type: NLAddressType
 */
class NLAddressType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLAddressDetailType $details
     */
    private $details = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\NLAddressDetailType $details = null)
    {
        $this->id = $id;
        $this->details = $details;
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
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\NLAddressDetailType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\NLAddressDetailType $details
     * @return self
     */
    public function setDetails(\Conecto\FeratelDsi\Dtos\NLAddressDetailType $details)
    {
        $this->details = $details;
        return $this;
    }
}

