<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewslettersUnsubscriptionsType
 *
 *
 * XSD Type: NLNewslettersUnsubscriptionsType
 */
class NLNewslettersUnsubscriptionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[] $newsletterUnsubscribe
     */
    private $newsletterUnsubscribe = [
        
    ];

    public function __construct(array $newsletterUnsubscribe = null)
    {
        $this->newsletterUnsubscribe = $newsletterUnsubscribe;
    }

    /**
     * Adds as newsletterUnsubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType $newsletterUnsubscribe
     */
    public function addToNewsletterUnsubscribe(\Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType $newsletterUnsubscribe)
    {
        $this->newsletterUnsubscribe[] = $newsletterUnsubscribe;
        return $this;
    }

    /**
     * isset newsletterUnsubscribe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewsletterUnsubscribe($index)
    {
        return isset($this->newsletterUnsubscribe[$index]);
    }

    /**
     * unset newsletterUnsubscribe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewsletterUnsubscribe($index)
    {
        unset($this->newsletterUnsubscribe[$index]);
    }

    /**
     * Gets as newsletterUnsubscribe
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[]
     */
    public function getNewsletterUnsubscribe()
    {
        return $this->newsletterUnsubscribe;
    }

    /**
     * Sets a new newsletterUnsubscribe
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[] $newsletterUnsubscribe
     * @return self
     */
    public function setNewsletterUnsubscribe(array $newsletterUnsubscribe = null)
    {
        $this->newsletterUnsubscribe = $newsletterUnsubscribe;
        return $this;
    }
}

