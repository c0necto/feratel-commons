<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GuestBasicType
 *
 *
 * XSD Type: GuestBasicType
 */
class GuestBasicType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $password
     */
    private $password = null;

    public function __construct(string $id = null, string $email = null, string $password = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
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
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}

