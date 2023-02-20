<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLInsertAddressType
 *
 *
 * XSD Type: NLInsertAddressType
 */
class NLInsertAddressType extends NLBaseAddressDetailType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[] $marketingCodes
     */
    private $marketingCodes = null;

    public function __construct(array $holidayThemes = null, string $lastName = null, string $type = null, string $function = null, string $uRL = null, string $eMail = null, string $eMail2 = null, string $sex = null, string $language = null, string $firstName = null, array $marketingCodes = null, string $street2 = null, string $street = null, string $zipCode = null, string $city = null, string $country = null, string $phone = null, string $mobile = null, string $fax = null, string $companyName = null, \DateTime $birthday = null, string $memo = null, string $contactType = null)
    {
        $this->holidayThemes = $holidayThemes;
        $this->marketingCodes = $marketingCodes;
        parent::__construct($eMail,$eMail2,$sex,$language,$firstName,$lastName,$street,$street2,$zipCode,$city,$country,$phone,$mobile,$fax,$uRL,$companyName,$function,$birthday,$type,$memo,$contactType);
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

