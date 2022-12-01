<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RangeType
 *
 * Defines request range object. Contains scope and list of identifiers of objects of interest for the request.
 * XSD Type: RangeType
 */
class RangeType extends ItemListType
{
    /**
     * Used to identify range scope.
     *
     * @var string $code
     */
    private $code = null;

    public function __construct(string $code = null, array $item = null)
    {
        $this->code = $code;
        parent::__construct($item);
    }

    /**
     * Gets as code
     *
     * Used to identify range scope.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Used to identify range scope.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

