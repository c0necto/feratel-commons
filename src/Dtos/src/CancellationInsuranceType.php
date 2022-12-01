<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationInsuranceType
 *
 *
 * XSD Type: CancellationInsuranceType
 */
class CancellationInsuranceType
{
    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CancellationInsuranceDetailType[] $cancellationInsuranceDetail
     */
    private $cancellationInsuranceDetail = [
        
    ];

    public function __construct(string $productType = null, array $cancellationInsuranceDetail = null)
    {
        $this->productType = $productType;
        $this->cancellationInsuranceDetail = $cancellationInsuranceDetail;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Adds as cancellationInsuranceDetail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceDetailType $cancellationInsuranceDetail
     */
    public function addToCancellationInsuranceDetail(\Conecto\FeratelDsi\Dtos\CancellationInsuranceDetailType $cancellationInsuranceDetail)
    {
        $this->cancellationInsuranceDetail[] = $cancellationInsuranceDetail;
        return $this;
    }

    /**
     * isset cancellationInsuranceDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInsuranceDetail($index)
    {
        return isset($this->cancellationInsuranceDetail[$index]);
    }

    /**
     * unset cancellationInsuranceDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInsuranceDetail($index)
    {
        unset($this->cancellationInsuranceDetail[$index]);
    }

    /**
     * Gets as cancellationInsuranceDetail
     *
     * @return \Conecto\FeratelDsi\Dtos\CancellationInsuranceDetailType[]
     */
    public function getCancellationInsuranceDetail()
    {
        return $this->cancellationInsuranceDetail;
    }

    /**
     * Sets a new cancellationInsuranceDetail
     *
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceDetailType[] $cancellationInsuranceDetail
     * @return self
     */
    public function setCancellationInsuranceDetail(array $cancellationInsuranceDetail = null)
    {
        $this->cancellationInsuranceDetail = $cancellationInsuranceDetail;
        return $this;
    }
}

