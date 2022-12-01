<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLMarketingCodeGroupType
 *
 *
 * XSD Type: NLMarketingCodeGroupType
 */
class NLMarketingCodeGroupType
{
    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var bool $global
     */
    private $global = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[] $marketingCodes
     */
    private $marketingCodes = null;

    public function __construct(int $order = null, bool $global = null, array $names = null, array $marketingCodes = null)
    {
        $this->order = $order;
        $this->global = $global;
        $this->names = $names;
        $this->marketingCodes = $marketingCodes;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Sets a new global
     *
     * @param bool $global
     * @return self
     */
    public function setGlobal($global)
    {
        $this->global = $global;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * Adds as marketingCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeType $marketingCode
     */
    public function addToMarketingCodes(\Conecto\FeratelDsi\Dtos\NLMarketingCodeType $marketingCode)
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
     * @return \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[]
     */
    public function getMarketingCodes()
    {
        return $this->marketingCodes;
    }

    /**
     * Sets a new marketingCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[] $marketingCodes
     * @return self
     */
    public function setMarketingCodes(array $marketingCodes = null)
    {
        $this->marketingCodes = $marketingCodes;
        return $this;
    }
}

