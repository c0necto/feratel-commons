<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewslettersSubscriptionsType
 *
 *
 * XSD Type: NLNewslettersSubscriptionsType
 */
class NLNewslettersSubscriptionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[] $newsletterSubscribe
     */
    private $newsletterSubscribe = [
        
    ];

    public function __construct(array $newsletterSubscribe = null)
    {
        $this->newsletterSubscribe = $newsletterSubscribe;
    }

    /**
     * Adds as newsletterSubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType $newsletterSubscribe
     */
    public function addToNewsletterSubscribe(\Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType $newsletterSubscribe)
    {
        $this->newsletterSubscribe[] = $newsletterSubscribe;
        return $this;
    }

    /**
     * isset newsletterSubscribe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewsletterSubscribe($index)
    {
        return isset($this->newsletterSubscribe[$index]);
    }

    /**
     * unset newsletterSubscribe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewsletterSubscribe($index)
    {
        unset($this->newsletterSubscribe[$index]);
    }

    /**
     * Gets as newsletterSubscribe
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[]
     */
    public function getNewsletterSubscribe()
    {
        return $this->newsletterSubscribe;
    }

    /**
     * Sets a new newsletterSubscribe
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[] $newsletterSubscribe
     * @return self
     */
    public function setNewsletterSubscribe(array $newsletterSubscribe = null)
    {
        $this->newsletterSubscribe = $newsletterSubscribe;
        return $this;
    }
}

