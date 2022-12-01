<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportDataSPDetailsType
 *
 *
 * XSD Type: ImportDataSPDetails
 */
class ImportDataSPDetailsType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $externalId
     */
    private $externalId = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $rooms
     */
    private $rooms = null;

    /**
     * @var int $beds
     */
    private $beds = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUStarsType $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     */
    private $categories = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $vatCode
     */
    private $vatCode = null;

    /**
     * @var string $stuOwner
     */
    private $stuOwner = null;

    /**
     * @var string $stuPhone
     */
    private $stuPhone = null;

    /**
     * @var string $stuFax
     */
    private $stuFax = null;

    /**
     * @var string $stuEmail
     */
    private $stuEmail = null;

    /**
     * @var string $stuUrl
     */
    private $stuUrl = null;

    public function __construct(string $name = null, string $code = null, string $externalId = null, string $type = null, int $rooms = null, int $beds = null, \Conecto\FeratelDsi\Dtos\STUStarsType $stars = null, array $classifications = null, array $categories = null, bool $active = null, string $vatCode = null, string $stuOwner = null, string $stuPhone = null, string $stuFax = null, string $stuEmail = null, string $stuUrl = null)
    {
        $this->name = $name;
        $this->code = $code;
        $this->externalId = $externalId;
        $this->type = $type;
        $this->rooms = $rooms;
        $this->beds = $beds;
        $this->stars = $stars;
        $this->classifications = $classifications;
        $this->categories = $categories;
        $this->active = $active;
        $this->vatCode = $vatCode;
        $this->stuOwner = $stuOwner;
        $this->stuPhone = $stuPhone;
        $this->stuFax = $stuFax;
        $this->stuEmail = $stuEmail;
        $this->stuUrl = $stuUrl;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets a new externalId
     *
     * @param string $externalId
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
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
     * Gets as rooms
     *
     * @return int
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets a new rooms
     *
     * @param int $rooms
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * Gets as beds
     *
     * @return int
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Sets a new beds
     *
     * @param int $beds
     * @return self
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
        return $this;
    }

    /**
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\STUStarsType
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\STUStarsType $stars
     * @return self
     */
    public function setStars(?\Conecto\FeratelDsi\Dtos\STUStarsType $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToClassifications(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->classifications[] = $item;
        return $this;
    }

    /**
     * isset classifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifications($index)
    {
        return isset($this->classifications[$index]);
    }

    /**
     * unset classifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifications($index)
    {
        unset($this->classifications[$index]);
    }

    /**
     * Gets as classifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     * @return self
     */
    public function setClassifications(array $classifications = null)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->categories[] = $item;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as vatCode
     *
     * @return string
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }

    /**
     * Sets a new vatCode
     *
     * @param string $vatCode
     * @return self
     */
    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;
        return $this;
    }

    /**
     * Gets as stuOwner
     *
     * @return string
     */
    public function getStuOwner()
    {
        return $this->stuOwner;
    }

    /**
     * Sets a new stuOwner
     *
     * @param string $stuOwner
     * @return self
     */
    public function setStuOwner($stuOwner)
    {
        $this->stuOwner = $stuOwner;
        return $this;
    }

    /**
     * Gets as stuPhone
     *
     * @return string
     */
    public function getStuPhone()
    {
        return $this->stuPhone;
    }

    /**
     * Sets a new stuPhone
     *
     * @param string $stuPhone
     * @return self
     */
    public function setStuPhone($stuPhone)
    {
        $this->stuPhone = $stuPhone;
        return $this;
    }

    /**
     * Gets as stuFax
     *
     * @return string
     */
    public function getStuFax()
    {
        return $this->stuFax;
    }

    /**
     * Sets a new stuFax
     *
     * @param string $stuFax
     * @return self
     */
    public function setStuFax($stuFax)
    {
        $this->stuFax = $stuFax;
        return $this;
    }

    /**
     * Gets as stuEmail
     *
     * @return string
     */
    public function getStuEmail()
    {
        return $this->stuEmail;
    }

    /**
     * Sets a new stuEmail
     *
     * @param string $stuEmail
     * @return self
     */
    public function setStuEmail($stuEmail)
    {
        $this->stuEmail = $stuEmail;
        return $this;
    }

    /**
     * Gets as stuUrl
     *
     * @return string
     */
    public function getStuUrl()
    {
        return $this->stuUrl;
    }

    /**
     * Sets a new stuUrl
     *
     * @param string $stuUrl
     * @return self
     */
    public function setStuUrl($stuUrl)
    {
        $this->stuUrl = $stuUrl;
        return $this;
    }
}

