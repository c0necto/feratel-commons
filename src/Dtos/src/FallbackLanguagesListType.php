<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FallbackLanguagesListType
 *
 *
 * XSD Type: FallbackLanguagesList
 */
class FallbackLanguagesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[] $language
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
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType $language
     */
    public function addToLanguage(\Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
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
     * @return \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[] $language
     * @return self
     */
    public function setLanguage(array $language = null)
    {
        $this->language = $language;
        return $this;
    }
}

