<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestPoolListType
 *
 *
 * XSD Type: RequestPoolListType
 */
class RequestPoolListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[] $requestPool
     */
    private $requestPool = [
        
    ];

    public function __construct(array $requestPool = null)
    {
        $this->requestPool = $requestPool;
    }

    /**
     * Adds as requestPool
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType $requestPool
     */
    public function addToRequestPool(\Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType $requestPool)
    {
        $this->requestPool[] = $requestPool;
        return $this;
    }

    /**
     * isset requestPool
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestPool($index)
    {
        return isset($this->requestPool[$index]);
    }

    /**
     * unset requestPool
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestPool($index)
    {
        unset($this->requestPool[$index]);
    }

    /**
     * Gets as requestPool
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[]
     */
    public function getRequestPool()
    {
        return $this->requestPool;
    }

    /**
     * Sets a new requestPool
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[] $requestPool
     * @return self
     */
    public function setRequestPool(array $requestPool = null)
    {
        $this->requestPool = $requestPool;
        return $this;
    }
}

