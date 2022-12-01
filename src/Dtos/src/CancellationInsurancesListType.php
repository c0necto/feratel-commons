<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationInsurancesListType
 *
 *
 * XSD Type: CancellationInsurancesList
 */
class CancellationInsurancesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[] $cancellationInsurance
     */
    private $cancellationInsurance = [
        
    ];

    public function __construct(array $cancellationInsurance = null)
    {
        $this->cancellationInsurance = $cancellationInsurance;
    }

    /**
     * Adds as cancellationInsurance
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceType $cancellationInsurance
     */
    public function addToCancellationInsurance(\Conecto\FeratelDsi\Dtos\CancellationInsuranceType $cancellationInsurance)
    {
        $this->cancellationInsurance[] = $cancellationInsurance;
        return $this;
    }

    /**
     * isset cancellationInsurance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInsurance($index)
    {
        return isset($this->cancellationInsurance[$index]);
    }

    /**
     * unset cancellationInsurance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInsurance($index)
    {
        unset($this->cancellationInsurance[$index]);
    }

    /**
     * Gets as cancellationInsurance
     *
     * @return \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[]
     */
    public function getCancellationInsurance()
    {
        return $this->cancellationInsurance;
    }

    /**
     * Sets a new cancellationInsurance
     *
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[] $cancellationInsurance
     * @return self
     */
    public function setCancellationInsurance(array $cancellationInsurance = null)
    {
        $this->cancellationInsurance = $cancellationInsurance;
        return $this;
    }
}

