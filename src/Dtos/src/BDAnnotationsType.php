<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAnnotationsType
 *
 *
 * XSD Type: BDAnnotationsType
 */
class BDAnnotationsType extends BasicElementType
{
    /**
     * @var bool $skipEmail
     */
    private $skipEmail = null;

    /**
     * @var bool $skipPhone
     */
    private $skipPhone = null;

    public function __construct(bool $skipEmail = null, bool $skipPhone = null, \DateTime $dateFrom = null)
    {
        $this->skipEmail = $skipEmail;
        $this->skipPhone = $skipPhone;
        parent::__construct($dateFrom);
    }

    /**
     * Gets as skipEmail
     *
     * @return bool
     */
    public function getSkipEmail()
    {
        return $this->skipEmail;
    }

    /**
     * Sets a new skipEmail
     *
     * @param bool $skipEmail
     * @return self
     */
    public function setSkipEmail($skipEmail)
    {
        $this->skipEmail = $skipEmail;
        return $this;
    }

    /**
     * Gets as skipPhone
     *
     * @return bool
     */
    public function getSkipPhone()
    {
        return $this->skipPhone;
    }

    /**
     * Sets a new skipPhone
     *
     * @param bool $skipPhone
     * @return self
     */
    public function setSkipPhone($skipPhone)
    {
        $this->skipPhone = $skipPhone;
        return $this;
    }
}

