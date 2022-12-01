<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLAddressDetailsMarketingCodesType
 *
 *
 * XSD Type: NLAddressDetailsMarketingCodesType
 */
class NLAddressDetailsMarketingCodesType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[] $marketingCode
     */
    private $marketingCode = [
        
    ];

    public function __construct(array $marketingCode = null)
    {
        $this->marketingCode = $marketingCode;
    }

    /**
     * Adds as marketingCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType $marketingCode
     */
    public function addToMarketingCode(\Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType $marketingCode)
    {
        $this->marketingCode[] = $marketingCode;
        return $this;
    }

    /**
     * isset marketingCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingCode($index)
    {
        return isset($this->marketingCode[$index]);
    }

    /**
     * unset marketingCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingCode($index)
    {
        unset($this->marketingCode[$index]);
    }

    /**
     * Gets as marketingCode
     *
     * @return \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[]
     */
    public function getMarketingCode()
    {
        return $this->marketingCode;
    }

    /**
     * Sets a new marketingCode
     *
     * @param \Conecto\FeratelDsi\Dtos\NLAddressDetailsMarketingCodeType[] $marketingCode
     * @return self
     */
    public function setMarketingCode(array $marketingCode = null)
    {
        $this->marketingCode = $marketingCode;
        return $this;
    }
}

