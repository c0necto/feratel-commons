<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookinFeeDetailType
 *
 *
 * XSD Type: BookinFeeDetailType
 */
class BookinFeeDetailType extends CancellationInsuranceBaseType
{
    public function __construct(float $amountFrom = null, float $amountTo = null, string $calculationRule = null, float $price = null)
    {
        parent::__construct($amountFrom,$amountTo,$calculationRule,$price);
    }
}

