<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLUpdateAddressDetailType
 *
 *
 * XSD Type: NLUpdateAddressDetailType
 */
class NLUpdateAddressDetailType extends NLBaseAddressDetailType
{
    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $id = null, string $eMail = null, string $eMail2 = null, string $sex = null, string $language = null, string $firstName = null, string $lastName = null, string $street = null, string $street2 = null, string $zipCode = null, string $city = null, string $country = null, string $phone = null, string $mobile = null, string $fax = null, string $uRL = null, string $companyName = null, string $function = null, \DateTime $birthday = null, string $type = null, string $memo = null, string $contactType = null)
    {
        $this->id = $id;
        parent::__construct($eMail,$eMail2,$sex,$language,$firstName,$lastName,$street,$street2,$zipCode,$city,$country,$phone,$mobile,$fax,$uRL,$companyName,$function,$birthday,$type,$memo,$contactType);
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

