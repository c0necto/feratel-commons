<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GetResultType
 *
 * The Dynamic Webservices request used in the main section of the xml document.
 * XSD Type: GetResultType
 */
class GetResultType
{
    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[] $parameters
     */
    private $parameters = null;

    public function __construct(string $code = null, array $parameters = null)
    {
        $this->code = $code;
        $this->parameters = $parameters;
    }

    /**
     * Gets as code
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
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType $parameter
     */
    public function addToParameters(\Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * @return \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \Conecto\FeratelDsi\Dtos\DynamicServiceParamsType\ParameterAType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}

