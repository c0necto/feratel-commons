<?php

namespace Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType;

use Conecto\FeratelDsi\Dtos\NLBaseNewslettersManageResponseType;

/**
 * Class representing ConsentSubscribedAType
 */
class ConsentSubscribedAType extends NLBaseNewslettersManageResponseType
{
    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        parent::__construct($addressId,$status,$message);
    }
}

