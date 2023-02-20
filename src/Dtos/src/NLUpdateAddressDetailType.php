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

    public function __construct(string $id = null, string $street2 = null, string $type = null, string $function = null, string $uRL = null, string $fax = null, string $mobile = null, string $phone = null, string $country = null, string $city = null, string $zipCode = null, string $street = null, string $eMail = null, string $lastName = null, string $firstName = null, string $language = null, string $sex = null, string $eMail2 = null, string $companyName = null, \DateTime $birthday = null, string $memo = null, string $contactType = null)
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

