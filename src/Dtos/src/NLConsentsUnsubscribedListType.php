<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLConsentsUnsubscribedListType
 *
 *
 * XSD Type: NLConsentsUnsubscribedList
 */
class NLConsentsUnsubscribedListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[] $consentUnsubscribed
     */
    private $consentUnsubscribed = [
        
    ];

    public function __construct(array $consentUnsubscribed = null)
    {
        $this->consentUnsubscribed = $consentUnsubscribed;
    }

    /**
     * Adds as consentUnsubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType $consentUnsubscribed
     */
    public function addToConsentUnsubscribed(\Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType $consentUnsubscribed)
    {
        $this->consentUnsubscribed[] = $consentUnsubscribed;
        return $this;
    }

    /**
     * isset consentUnsubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentUnsubscribed($index)
    {
        return isset($this->consentUnsubscribed[$index]);
    }

    /**
     * unset consentUnsubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentUnsubscribed($index)
    {
        unset($this->consentUnsubscribed[$index]);
    }

    /**
     * Gets as consentUnsubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[]
     */
    public function getConsentUnsubscribed()
    {
        return $this->consentUnsubscribed;
    }

    /**
     * Sets a new consentUnsubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[] $consentUnsubscribed
     * @return self
     */
    public function setConsentUnsubscribed(array $consentUnsubscribed = null)
    {
        $this->consentUnsubscribed = $consentUnsubscribed;
        return $this;
    }
}

