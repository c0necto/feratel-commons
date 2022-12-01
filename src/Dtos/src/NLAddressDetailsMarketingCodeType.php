<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLAddressDetailsMarketingCodeType
 *
 *
 * XSD Type: NLAddressDetailsMarketingCodeType
 */
class NLAddressDetailsMarketingCodeType
{
    /**
     * @var string $groupCode
     */
    private $groupCode = null;

    /**
     * @var string[] $code
     */
    private $code = [
        
    ];

    public function __construct(string $groupCode = null, array $code = null)
    {
        $this->groupCode = $groupCode;
        $this->code = $code;
    }

    /**
     * Gets as groupCode
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;
        return $this;
    }

    /**
     * Adds as code
     *
     * @return self
     * @param string $code
     */
    public function addToCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * @return string[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }
}

