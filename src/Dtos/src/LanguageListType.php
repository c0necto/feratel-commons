<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LanguageListType
 *
 * Defines list of languages for translatable values.
 * XSD Type: LanguageList
 */
class LanguageListType
{
    /**
     * Defines language list's single item.
     *
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $language
     */
    private $language = [
        
    ];

    public function __construct(array $language = null)
    {
        $this->language = $language;
    }

    /**
     * Adds as language
     *
     * Defines language list's single item.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToLanguage(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * Defines language list's single item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Defines language list's single item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Defines language list's single item.
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Defines language list's single item.
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }
}

