<?php

namespace Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType;

/**
 * Class representing PersonAType
 */
class PersonAType
{
    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var \DateTime $dateOfBirth
     */
    private $dateOfBirth = null;

    public function __construct(string $firstName = null, string $lastName = null, \DateTime $dateOfBirth = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets a new dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return self
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth = null)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
}

