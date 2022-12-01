<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceProviderFilterType
 *
 *
 * XSD Type: BDServiceProviderFilter
 */
class BDServiceProviderFilterType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
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
     * @var string $status
     */
    private $status = null;

    /**
     * @var bool $onlyBookable
     */
    private $onlyBookable = null;

    /**
     * @var string[] $usage
     */
    private $usage = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMasters
     */
    private $housePackageMasters = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMastersSelfAssign
     */
    private $housePackageMastersSelfAssign = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType $service
     */
    private $service = null;

    public function __construct(string $type = null, string $id = null, string $code = null, string $name = null, string $status = null, bool $onlyBookable = null, array $usage = null, \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMasters = null, \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMastersSelfAssign = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType $service = null)
    {
        $this->type = $type;
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->status = $status;
        $this->onlyBookable = $onlyBookable;
        $this->usage = $usage;
        $this->housePackageMasters = $housePackageMasters;
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        $this->service = $service;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as onlyBookable
     *
     * @return bool
     */
    public function getOnlyBookable()
    {
        return $this->onlyBookable;
    }

    /**
     * Sets a new onlyBookable
     *
     * @param bool $onlyBookable
     * @return self
     */
    public function setOnlyBookable($onlyBookable)
    {
        $this->onlyBookable = $onlyBookable;
        return $this;
    }

    /**
     * Adds as usage
     *
     * @return self
     * @param string $usage
     */
    public function addToUsage($usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * @return string[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * @param string $usage
     * @return self
     */
    public function setUsage(array $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as housePackageMasters
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType
     */
    public function getHousePackageMasters()
    {
        return $this->housePackageMasters;
    }

    /**
     * Sets a new housePackageMasters
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMasters
     * @return self
     */
    public function setHousePackageMasters(?\Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMasters = null)
    {
        $this->housePackageMasters = $housePackageMasters;
        return $this;
    }

    /**
     * Gets as housePackageMastersSelfAssign
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType
     */
    public function getHousePackageMastersSelfAssign()
    {
        return $this->housePackageMastersSelfAssign;
    }

    /**
     * Sets a new housePackageMastersSelfAssign
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMastersSelfAssign
     * @return self
     */
    public function setHousePackageMastersSelfAssign(?\Conecto\FeratelDsi\Dtos\BDHousePackageMastersFilterType $housePackageMastersSelfAssign = null)
    {
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType $service
     * @return self
     */
    public function setService(?\Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType $service = null)
    {
        $this->service = $service;
        return $this;
    }
}

