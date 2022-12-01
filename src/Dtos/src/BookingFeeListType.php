<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingFeeListType
 *
 *
 * XSD Type: BookingFeeList
 */
class BookingFeeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[] $bookinFeeDetail
     */
    private $bookinFeeDetail = [
        
    ];

    public function __construct(array $bookinFeeDetail = null)
    {
        $this->bookinFeeDetail = $bookinFeeDetail;
    }

    /**
     * Adds as bookinFeeDetail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookinFeeDetailType $bookinFeeDetail
     */
    public function addToBookinFeeDetail(\Conecto\FeratelDsi\Dtos\BookinFeeDetailType $bookinFeeDetail)
    {
        $this->bookinFeeDetail[] = $bookinFeeDetail;
        return $this;
    }

    /**
     * isset bookinFeeDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookinFeeDetail($index)
    {
        return isset($this->bookinFeeDetail[$index]);
    }

    /**
     * unset bookinFeeDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookinFeeDetail($index)
    {
        unset($this->bookinFeeDetail[$index]);
    }

    /**
     * Gets as bookinFeeDetail
     *
     * @return \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[]
     */
    public function getBookinFeeDetail()
    {
        return $this->bookinFeeDetail;
    }

    /**
     * Sets a new bookinFeeDetail
     *
     * @param \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[] $bookinFeeDetail
     * @return self
     */
    public function setBookinFeeDetail(array $bookinFeeDetail = null)
    {
        $this->bookinFeeDetail = $bookinFeeDetail;
        return $this;
    }
}

