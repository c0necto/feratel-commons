<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchServiceProviderType
 *
 *
 * XSD Type: SearchServiceProviderType
 */
class SearchServiceProviderType
{
    /**
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $contentScoreMin
     */
    private $contentScoreMin = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchServiceType $service
     */
    private $service = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchProductType $product
     */
    private $product = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RadiusSearchType $radiusSearch
     */
    private $radiusSearch = null;

    public function __construct(string $id = null, string $code = null, string $name = null, int $contentScoreMin = null, \Conecto\FeratelDsi\Dtos\SearchServiceType $service = null, \Conecto\FeratelDsi\Dtos\SearchProductType $product = null, \Conecto\FeratelDsi\Dtos\RadiusSearchType $radiusSearch = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->contentScoreMin = $contentScoreMin;
        $this->service = $service;
        $this->product = $product;
        $this->radiusSearch = $radiusSearch;
    }

    /**
     * Gets as id
     *
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as contentScoreMin
     *
     * @return int
     */
    public function getContentScoreMin()
    {
        return $this->contentScoreMin;
    }

    /**
     * Sets a new contentScoreMin
     *
     * @param int $contentScoreMin
     * @return self
     */
    public function setContentScoreMin($contentScoreMin)
    {
        $this->contentScoreMin = $contentScoreMin;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchServiceType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceType $service
     * @return self
     */
    public function setService(?\Conecto\FeratelDsi\Dtos\SearchServiceType $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchProductType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchProductType $product
     * @return self
     */
    public function setProduct(?\Conecto\FeratelDsi\Dtos\SearchProductType $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as radiusSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\RadiusSearchType
     */
    public function getRadiusSearch()
    {
        return $this->radiusSearch;
    }

    /**
     * Sets a new radiusSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\RadiusSearchType $radiusSearch
     * @return self
     */
    public function setRadiusSearch(?\Conecto\FeratelDsi\Dtos\RadiusSearchType $radiusSearch = null)
    {
        $this->radiusSearch = $radiusSearch;
        return $this;
    }
}

