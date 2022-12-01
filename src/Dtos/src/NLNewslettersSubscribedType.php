<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewslettersSubscribedType
 *
 *
 * XSD Type: NLNewslettersSubscribedType
 */
class NLNewslettersSubscribedType extends NLBaseNewslettersManageResponseType
{
    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        parent::__construct($addressId,$status,$message);
    }
}

