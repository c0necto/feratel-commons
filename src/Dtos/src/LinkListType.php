<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LinkListType
 *
 *
 * XSD Type: LinkList
 */
class LinkListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\LinkType[] $link
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
     * @param \Conecto\FeratelDsi\Dtos\LinkType $link
     */
    public function addToLink(\Conecto\FeratelDsi\Dtos\LinkType $link)
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
     * @return \Conecto\FeratelDsi\Dtos\LinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * @param \Conecto\FeratelDsi\Dtos\LinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }
}

