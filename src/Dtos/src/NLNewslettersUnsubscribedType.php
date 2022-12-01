<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewslettersUnsubscribedType
 *
 *
 * XSD Type: NLNewslettersUnsubscribedType
 */
class NLNewslettersUnsubscribedType extends NLBaseNewslettersManageResponseType
{
    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        parent::__construct($addressId,$status,$message);
    }
}

