<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing VisitorTaxListType
 *
 *
 * XSD Type: VisitorTaxList
 */
class VisitorTaxListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\VisitorTaxType[] $visitorTax
     */
    private $visitorTax = [
        
    ];

    public function __construct(array $visitorTax = null)
    {
        $this->visitorTax = $visitorTax;
    }

    /**
     * Adds as visitorTax
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\VisitorTaxType $visitorTax
     */
    public function addToVisitorTax(\Conecto\FeratelDsi\Dtos\VisitorTaxType $visitorTax)
    {
        $this->visitorTax[] = $visitorTax;
        return $this;
    }

    /**
     * isset visitorTax
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVisitorTax($index)
    {
        return isset($this->visitorTax[$index]);
    }

    /**
     * unset visitorTax
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVisitorTax($index)
    {
        unset($this->visitorTax[$index]);
    }

    /**
     * Gets as visitorTax
     *
     * @return \Conecto\FeratelDsi\Dtos\VisitorTaxType[]
     */
    public function getVisitorTax()
    {
        return $this->visitorTax;
    }

    /**
     * Sets a new visitorTax
     *
     * @param \Conecto\FeratelDsi\Dtos\VisitorTaxType[] $visitorTax
     * @return self
     */
    public function setVisitorTax(array $visitorTax = null)
    {
        $this->visitorTax = $visitorTax;
        return $this;
    }
}

