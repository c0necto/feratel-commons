<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLConsentsSubscriptionsType
 *
 *
 * XSD Type: NLConsentsSubscriptionsType
 */
class NLConsentsSubscriptionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentSubscribe
     */
    private $consentSubscribe = [
        
    ];

    public function __construct(array $consentSubscribe = null)
    {
        $this->consentSubscribe = $consentSubscribe;
    }

    /**
     * Adds as consentSubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentSubscribe
     */
    public function addToConsentSubscribe(\Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentSubscribe)
    {
        $this->consentSubscribe[] = $consentSubscribe;
        return $this;
    }

    /**
     * isset consentSubscribe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentSubscribe($index)
    {
        return isset($this->consentSubscribe[$index]);
    }

    /**
     * unset consentSubscribe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentSubscribe($index)
    {
        unset($this->consentSubscribe[$index]);
    }

    /**
     * Gets as consentSubscribe
     *
     * @return \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[]
     */
    public function getConsentSubscribe()
    {
        return $this->consentSubscribe;
    }

    /**
     * Sets a new consentSubscribe
     *
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentSubscribe
     * @return self
     */
    public function setConsentSubscribe(array $consentSubscribe = null)
    {
        $this->consentSubscribe = $consentSubscribe;
        return $this;
    }
}

