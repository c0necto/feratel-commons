<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SalutationListType
 *
 *
 * XSD Type: SalutationList
 */
class SalutationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SalutationType[] $salutation
     */
    private $salutation = [
        
    ];

    public function __construct(array $salutation = null)
    {
        $this->salutation = $salutation;
    }

    /**
     * Adds as salutation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SalutationType $salutation
     */
    public function addToSalutation(\Conecto\FeratelDsi\Dtos\SalutationType $salutation)
    {
        $this->salutation[] = $salutation;
        return $this;
    }

    /**
     * isset salutation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalutation($index)
    {
        return isset($this->salutation[$index]);
    }

    /**
     * unset salutation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalutation($index)
    {
        unset($this->salutation[$index]);
    }

    /**
     * Gets as salutation
     *
     * @return \Conecto\FeratelDsi\Dtos\SalutationType[]
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation
     *
     * @param \Conecto\FeratelDsi\Dtos\SalutationType[] $salutation
     * @return self
     */
    public function setSalutation(array $salutation = null)
    {
        $this->salutation = $salutation;
        return $this;
    }
}

