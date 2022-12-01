<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CheckEffectUsersType
 *
 *
 * XSD Type: CheckEffectUsersType
 */
class CheckEffectUsersType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CheckEffectUserType[] $checkEffectUser
     */
    private $checkEffectUser = [
        
    ];

    public function __construct(array $checkEffectUser = null)
    {
        $this->checkEffectUser = $checkEffectUser;
    }

    /**
     * Adds as checkEffectUser
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CheckEffectUserType $checkEffectUser
     */
    public function addToCheckEffectUser(\Conecto\FeratelDsi\Dtos\CheckEffectUserType $checkEffectUser)
    {
        $this->checkEffectUser[] = $checkEffectUser;
        return $this;
    }

    /**
     * isset checkEffectUser
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCheckEffectUser($index)
    {
        return isset($this->checkEffectUser[$index]);
    }

    /**
     * unset checkEffectUser
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCheckEffectUser($index)
    {
        unset($this->checkEffectUser[$index]);
    }

    /**
     * Gets as checkEffectUser
     *
     * @return \Conecto\FeratelDsi\Dtos\CheckEffectUserType[]
     */
    public function getCheckEffectUser()
    {
        return $this->checkEffectUser;
    }

    /**
     * Sets a new checkEffectUser
     *
     * @param \Conecto\FeratelDsi\Dtos\CheckEffectUserType[] $checkEffectUser
     * @return self
     */
    public function setCheckEffectUser(array $checkEffectUser = null)
    {
        $this->checkEffectUser = $checkEffectUser;
        return $this;
    }
}

