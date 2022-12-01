<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewsletterSentType
 *
 *
 * XSD Type: NLNewsletterSentType
 */
class NLNewsletterSentType extends NLBaseNewslettersManageResponseType
{
    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        parent::__construct($addressId,$status,$message);
    }
}

