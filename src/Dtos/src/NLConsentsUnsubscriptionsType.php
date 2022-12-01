<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLConsentsUnsubscriptionsType
 *
 *
 * XSD Type: NLConsentsUnsubscriptionsType
 */
class NLConsentsUnsubscriptionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentUnsubscribe
     */
    private $consentUnsubscribe = [
        
    ];

    public function __construct(array $consentUnsubscribe = null)
    {
        $this->consentUnsubscribe = $consentUnsubscribe;
    }

    /**
     * Adds as consentUnsubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentUnsubscribe
     */
    public function addToConsentUnsubscribe(\Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentUnsubscribe)
    {
        $this->consentUnsubscribe[] = $consentUnsubscribe;
        return $this;
    }

    /**
     * isset consentUnsubscribe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentUnsubscribe($index)
    {
        return isset($this->consentUnsubscribe[$index]);
    }

    /**
     * unset consentUnsubscribe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentUnsubscribe($index)
    {
        unset($this->consentUnsubscribe[$index]);
    }

    /**
     * Gets as consentUnsubscribe
     *
     * @return \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[]
     */
    public function getConsentUnsubscribe()
    {
        return $this->consentUnsubscribe;
    }

    /**
     * Sets a new consentUnsubscribe
     *
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentUnsubscribe
     * @return self
     */
    public function setConsentUnsubscribe(array $consentUnsubscribe = null)
    {
        $this->consentUnsubscribe = $consentUnsubscribe;
        return $this;
    }
}

