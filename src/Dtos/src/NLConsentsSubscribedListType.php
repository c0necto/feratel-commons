<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLConsentsSubscribedListType
 *
 *
 * XSD Type: NLConsentsSubscribedList
 */
class NLConsentsSubscribedListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[] $consentSubscribed
     */
    private $consentSubscribed = [
        
    ];

    public function __construct(array $consentSubscribed = null)
    {
        $this->consentSubscribed = $consentSubscribed;
    }

    /**
     * Adds as consentSubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType $consentSubscribed
     */
    public function addToConsentSubscribed(\Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType $consentSubscribed)
    {
        $this->consentSubscribed[] = $consentSubscribed;
        return $this;
    }

    /**
     * isset consentSubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentSubscribed($index)
    {
        return isset($this->consentSubscribed[$index]);
    }

    /**
     * unset consentSubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentSubscribed($index)
    {
        unset($this->consentSubscribed[$index]);
    }

    /**
     * Gets as consentSubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[]
     */
    public function getConsentSubscribed()
    {
        return $this->consentSubscribed;
    }

    /**
     * Sets a new consentSubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[] $consentSubscribed
     * @return self
     */
    public function setConsentSubscribed(array $consentSubscribed = null)
    {
        $this->consentSubscribed = $consentSubscribed;
        return $this;
    }
}

