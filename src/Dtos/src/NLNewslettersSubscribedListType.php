<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewslettersSubscribedListType
 *
 *
 * XSD Type: NLNewslettersSubscribedList
 */
class NLNewslettersSubscribedListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[] $newsletterSubscribed
     */
    private $newsletterSubscribed = [
        
    ];

    public function __construct(array $newsletterSubscribed = null)
    {
        $this->newsletterSubscribed = $newsletterSubscribed;
    }

    /**
     * Adds as newsletterSubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType $newsletterSubscribed
     */
    public function addToNewsletterSubscribed(\Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType $newsletterSubscribed)
    {
        $this->newsletterSubscribed[] = $newsletterSubscribed;
        return $this;
    }

    /**
     * isset newsletterSubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewsletterSubscribed($index)
    {
        return isset($this->newsletterSubscribed[$index]);
    }

    /**
     * unset newsletterSubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewsletterSubscribed($index)
    {
        unset($this->newsletterSubscribed[$index]);
    }

    /**
     * Gets as newsletterSubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[]
     */
    public function getNewsletterSubscribed()
    {
        return $this->newsletterSubscribed;
    }

    /**
     * Sets a new newsletterSubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[] $newsletterSubscribed
     * @return self
     */
    public function setNewsletterSubscribed(array $newsletterSubscribed = null)
    {
        $this->newsletterSubscribed = $newsletterSubscribed;
        return $this;
    }
}

