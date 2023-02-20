<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLAddressDetailType
 *
 *
 * XSD Type: NLAddressDetailType
 */
class NLAddressDetailType extends NLBaseAddressDetailType
{
    /**
     * @var bool $newsletterActive
     */
    private $newsletterActive = null;

    /**
     * @var bool $marketingInfoActive
     */
    private $marketingInfoActive = null;

    /**
     * @var bool $ratingsActive
     */
    private $ratingsActive = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[] $marketingCodes
     */
    private $marketingCodes = null;

    public function __construct(bool $newsletterActive = null, string $eMail2 = null, string $type = null, string $function = null, string $uRL = null, string $mobile = null, string $country = null, bool $ratingsActive = null, bool $active = null, array $holidayThemes = null, array $marketingCodes = null, string $eMail = null, bool $marketingInfoActive = null, string $language = null, string $sex = null, string $firstName = null, string $lastName = null, string $street = null, string $street2 = null, string $zipCode = null, string $city = null, string $phone = null, string $fax = null, string $companyName = null, \DateTime $birthday = null, string $memo = null, string $contactType = null)
    {
        $this->newsletterActive = $newsletterActive;
        $this->marketingInfoActive = $marketingInfoActive;
        $this->ratingsActive = $ratingsActive;
        $this->active = $active;
        $this->holidayThemes = $holidayThemes;
        $this->marketingCodes = $marketingCodes;
        parent::__construct($eMail,$eMail2,$sex,$language,$firstName,$lastName,$street,$street2,$zipCode,$city,$country,$phone,$mobile,$fax,$uRL,$companyName,$function,$birthday,$type,$memo,$contactType);
    }

    /**
     * Gets as newsletterActive
     *
     * @return bool
     */
    public function getNewsletterActive()
    {
        return $this->newsletterActive;
    }

    /**
     * Sets a new newsletterActive
     *
     * @param bool $newsletterActive
     * @return self
     */
    public function setNewsletterActive($newsletterActive)
    {
        $this->newsletterActive = $newsletterActive;
        return $this;
    }

    /**
     * Gets as marketingInfoActive
     *
     * @return bool
     */
    public function getMarketingInfoActive()
    {
        return $this->marketingInfoActive;
    }

    /**
     * Sets a new marketingInfoActive
     *
     * @param bool $marketingInfoActive
     * @return self
     */
    public function setMarketingInfoActive($marketingInfoActive)
    {
        $this->marketingInfoActive = $marketingInfoActive;
        return $this;
    }

    /**
     * Gets as ratingsActive
     *
     * @return bool
     */
    public function getRatingsActive()
    {
        return $this->ratingsActive;
    }

    /**
     * Sets a new ratingsActive
     *
     * @param bool $ratingsActive
     * @return self
     */
    public function setRatingsActive($ratingsActive)
    {
        $this->ratingsActive = $ratingsActive;
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
     * Adds as holidayTheme
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLHolidayThemeType $holidayTheme
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\NLHolidayThemeType $holidayTheme)
    {
        $this->holidayThemes[] = $holidayTheme;
        return $this;
    }

    /**
     * isset holidayThemes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayThemes($index)
    {
        return isset($this->holidayThemes[$index]);
    }

    /**
     * unset holidayThemes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayThemes($index)
    {
        unset($this->holidayThemes[$index]);
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Adds as marketingCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType $marketingCode
     */
    public function addToMarketingCodes(\Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType $marketingCode)
    {
        $this->marketingCodes[] = $marketingCode;
        return $this;
    }

    /**
     * isset marketingCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingCodes($index)
    {
        return isset($this->marketingCodes[$index]);
    }

    /**
     * unset marketingCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingCodes($index)
    {
        unset($this->marketingCodes[$index]);
    }

    /**
     * Gets as marketingCodes
     *
     * @return \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[]
     */
    public function getMarketingCodes()
    {
        return $this->marketingCodes;
    }

    /**
     * Sets a new marketingCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[] $marketingCodes
     * @return self
     */
    public function setMarketingCodes(array $marketingCodes = null)
    {
        $this->marketingCodes = $marketingCodes;
        return $this;
    }
}

