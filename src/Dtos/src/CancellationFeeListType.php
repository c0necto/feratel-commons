<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationFeeListType
 *
 *
 * XSD Type: CancellationFeeList
 */
class CancellationFeeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[] $cancellationFeeDetail
     */
    private $cancellationFeeDetail = [
        
    ];

    public function __construct(array $cancellationFeeDetail = null)
    {
        $this->cancellationFeeDetail = $cancellationFeeDetail;
    }

    /**
     * Adds as cancellationFeeDetail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType $cancellationFeeDetail
     */
    public function addToCancellationFeeDetail(\Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType $cancellationFeeDetail)
    {
        $this->cancellationFeeDetail[] = $cancellationFeeDetail;
        return $this;
    }

    /**
     * isset cancellationFeeDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationFeeDetail($index)
    {
        return isset($this->cancellationFeeDetail[$index]);
    }

    /**
     * unset cancellationFeeDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationFeeDetail($index)
    {
        unset($this->cancellationFeeDetail[$index]);
    }

    /**
     * Gets as cancellationFeeDetail
     *
     * @return \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[]
     */
    public function getCancellationFeeDetail()
    {
        return $this->cancellationFeeDetail;
    }

    /**
     * Sets a new cancellationFeeDetail
     *
     * @param \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[] $cancellationFeeDetail
     * @return self
     */
    public function setCancellationFeeDetail(array $cancellationFeeDetail = null)
    {
        $this->cancellationFeeDetail = $cancellationFeeDetail;
        return $this;
    }
}

