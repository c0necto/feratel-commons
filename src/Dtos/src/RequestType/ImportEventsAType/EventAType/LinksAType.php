<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType;

/**
 * Class representing LinksAType
 */
class LinksAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[] $link
     */
    private $link = [
        
    ];

    public function __construct(array $link = null)
    {
        $this->link = $link;
    }

    /**
     * Adds as link
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType $link
     */
    public function addToLink(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }
}

