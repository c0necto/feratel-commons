<?php

namespace Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType;

use Conecto\FeratelDsi\Dtos\NLBaseNewslettersManageResponseType;

/**
 * Class representing ConsentUnsubscribedAType
 */
class ConsentUnsubscribedAType extends NLBaseNewslettersManageResponseType
{
    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        parent::__construct($addressId,$status,$message);
    }
}

