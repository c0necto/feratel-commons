<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewsletterSentListType
 *
 *
 * XSD Type: NLNewsletterSentList
 */
class NLNewsletterSentListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[] $newsletterSend
     */
    private $newsletterSend = [
        
    ];

    public function __construct(array $newsletterSend = null)
    {
        $this->newsletterSend = $newsletterSend;
    }

    /**
     * Adds as newsletterSend
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSentType $newsletterSend
     */
    public function addToNewsletterSend(\Conecto\FeratelDsi\Dtos\NLNewsletterSentType $newsletterSend)
    {
        $this->newsletterSend[] = $newsletterSend;
        return $this;
    }

    /**
     * isset newsletterSend
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewsletterSend($index)
    {
        return isset($this->newsletterSend[$index]);
    }

    /**
     * unset newsletterSend
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewsletterSend($index)
    {
        unset($this->newsletterSend[$index]);
    }

    /**
     * Gets as newsletterSend
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[]
     */
    public function getNewsletterSend()
    {
        return $this->newsletterSend;
    }

    /**
     * Sets a new newsletterSend
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[] $newsletterSend
     * @return self
     */
    public function setNewsletterSend(array $newsletterSend = null)
    {
        $this->newsletterSend = $newsletterSend;
        return $this;
    }
}

