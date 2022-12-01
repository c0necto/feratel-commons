<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DynamicServiceParamsType
 *
 * The parameters list used in the Dynamic Webservices request.
 * XSD Type: DynamicServiceParams
 */
class DynamicServiceParamsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[] $parameter
     */
    private $parameter = [
        
    ];

    public function __construct(array $parameter = null)
    {
        $this->parameter = $parameter;
    }

    /**
     * Adds as parameter
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType $parameter
     */
    public function addToParameter(\Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * @return \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }
}

