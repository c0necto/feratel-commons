<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CommitShoppingCartType
 *
 *
 * XSD Type: CommitShoppingCartType
 */
class CommitShoppingCartType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $userId
     */
    private $userId = null;

    /**
     * @var string $linkKey
     */
    private $linkKey = null;

    /**
     * @var float $commissionFromSP
     */
    private $commissionFromSP = null;

    /**
     * @var float $commissionToPOS
     */
    private $commissionToPOS = null;

    public function __construct(string $id = null, string $userId = null, string $linkKey = null, float $commissionFromSP = null, float $commissionToPOS = null)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->linkKey = $linkKey;
        $this->commissionFromSP = $commissionFromSP;
        $this->commissionToPOS = $commissionToPOS;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets as linkKey
     *
     * @return string
     */
    public function getLinkKey()
    {
        return $this->linkKey;
    }

    /**
     * Sets a new linkKey
     *
     * @param string $linkKey
     * @return self
     */
    public function setLinkKey($linkKey)
    {
        $this->linkKey = $linkKey;
        return $this;
    }

    /**
     * Gets as commissionFromSP
     *
     * @return float
     */
    public function getCommissionFromSP()
    {
        return $this->commissionFromSP;
    }

    /**
     * Sets a new commissionFromSP
     *
     * @param float $commissionFromSP
     * @return self
     */
    public function setCommissionFromSP($commissionFromSP)
    {
        $this->commissionFromSP = $commissionFromSP;
        return $this;
    }

    /**
     * Gets as commissionToPOS
     *
     * @return float
     */
    public function getCommissionToPOS()
    {
        return $this->commissionToPOS;
    }

    /**
     * Sets a new commissionToPOS
     *
     * @param float $commissionToPOS
     * @return self
     */
    public function setCommissionToPOS($commissionToPOS)
    {
        $this->commissionToPOS = $commissionToPOS;
        return $this;
    }
}

