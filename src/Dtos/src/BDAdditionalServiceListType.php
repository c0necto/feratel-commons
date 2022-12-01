<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServiceListType
 *
 *
 * XSD Type: BDAdditionalServiceList
 */
class BDAdditionalServiceListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[] $additionalService
     */
    private $additionalService = [
        
    ];

    public function __construct(array $additionalService = null)
    {
        $this->additionalService = $additionalService;
    }

    /**
     * Adds as additionalService
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType $additionalService
     */
    public function addToAdditionalService(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType $additionalService)
    {
        $this->additionalService[] = $additionalService;
        return $this;
    }

    /**
     * isset additionalService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalService($index)
    {
        return isset($this->additionalService[$index]);
    }

    /**
     * unset additionalService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalService($index)
    {
        unset($this->additionalService[$index]);
    }

    /**
     * Gets as additionalService
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[]
     */
    public function getAdditionalService()
    {
        return $this->additionalService;
    }

    /**
     * Sets a new additionalService
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[] $additionalService
     * @return self
     */
    public function setAdditionalService(array $additionalService)
    {
        $this->additionalService = $additionalService;
        return $this;
    }
}

