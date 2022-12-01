<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GetCEDataType
 *
 *
 * XSD Type: GetCEDataType
 */
class GetCEDataType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $cECode
     */
    private $cECode = null;

    /**
     * Provides translation information for request of basic data.
     *
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     */
    private $languages = null;

    public function __construct(string $type = null, string $cECode = null, array $languages = null)
    {
        $this->type = $type;
        $this->cECode = $cECode;
        $this->languages = $languages;
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
     * Gets as cECode
     *
     * @return string
     */
    public function getCECode()
    {
        return $this->cECode;
    }

    /**
     * Sets a new cECode
     *
     * @param string $cECode
     * @return self
     */
    public function setCECode($cECode)
    {
        $this->cECode = $cECode;
        return $this;
    }

    /**
     * Adds as language
     *
     * Provides translation information for request of basic data.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToLanguages(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->languages[] = $language;
        return $this;
    }

    /**
     * isset languages
     *
     * Provides translation information for request of basic data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * Provides translation information for request of basic data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * Provides translation information for request of basic data.
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * Provides translation information for request of basic data.
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     * @return self
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }
}

