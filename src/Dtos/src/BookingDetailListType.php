<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingDetailListType
 *
 *
 * XSD Type: BookingDetailList
 */
class BookingDetailListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingDetailType[] $detail
     */
    private $detail = [
        
    ];

    public function __construct(array $detail = null)
    {
        $this->detail = $detail;
    }

    /**
     * Adds as detail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType $detail
     */
    public function addToDetail(\Conecto\FeratelDsi\Dtos\BookingDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }
}

