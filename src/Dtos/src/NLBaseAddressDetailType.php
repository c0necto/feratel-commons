<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLBaseAddressDetailType
 *
 *
 * XSD Type: NLBaseAddressDetailType
 */
class NLBaseAddressDetailType
{
    /**
     * @var string $eMail
     */
    private $eMail = null;

    /**
     * @var string $eMail2
     */
    private $eMail2 = null;

    /**
     * @var string $sex
     */
    private $sex = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $street2
     */
    private $street2 = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $mobile
     */
    private $mobile = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * @var string $function
     */
    private $function = null;

    /**
     * @var \DateTime $birthday
     */
    private $birthday = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $memo
     */
    private $memo = null;

    /**
     * @var string $contactType
     */
    private $contactType = null;

    public function __construct(string $eMail = null, string $eMail2 = null, string $sex = null, string $language = null, string $firstName = null, string $lastName = null, string $street = null, string $street2 = null, string $zipCode = null, string $city = null, string $country = null, string $phone = null, string $mobile = null, string $fax = null, string $uRL = null, string $companyName = null, string $function = null, \DateTime $birthday = null, string $type = null, string $memo = null, string $contactType = null)
    {
        $this->eMail = $eMail;
        $this->eMail2 = $eMail2;
        $this->sex = $sex;
        $this->language = $language;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->street = $street;
        $this->street2 = $street2;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->mobile = $mobile;
        $this->fax = $fax;
        $this->uRL = $uRL;
        $this->companyName = $companyName;
        $this->function = $function;
        $this->birthday = $birthday;
        $this->type = $type;
        $this->memo = $memo;
        $this->contactType = $contactType;
    }

    /**
     * Gets as eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Sets a new eMail
     *
     * @param string $eMail
     * @return self
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
        return $this;
    }

    /**
     * Gets as eMail2
     *
     * @return string
     */
    public function getEMail2()
    {
        return $this->eMail2;
    }

    /**
     * Sets a new eMail2
     *
     * @param string $eMail2
     * @return self
     */
    public function setEMail2($eMail2)
    {
        $this->eMail2 = $eMail2;
        return $this;
    }

    /**
     * Gets as sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex
     *
     * @param string $sex
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Sets a new street2
     *
     * @param string $street2
     * @return self
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * @param string $function
     * @return self
     */
    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Sets a new birthday
     *
     * @param \DateTime $birthday
     * @return self
     */
    public function setBirthday(?\DateTime $birthday = null)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets a new memo
     *
     * @param string $memo
     * @return self
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Gets as contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets a new contactType
     *
     * @param string $contactType
     * @return self
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }
}

