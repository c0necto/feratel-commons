<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationInsuranceDetailType
 *
 *
 * XSD Type: CancellationInsuranceDetailType
 */
class CancellationInsuranceDetailType extends CancellationInsuranceBaseType
{
    public function __construct(float $amountFrom = null, float $amountTo = null, string $calculationRule = null, float $price = null)
    {
        parent::__construct($amountFrom,$amountTo,$calculationRule,$price);
    }
}

