<?php

namespace Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType;

/**
 * Class representing ERVInsuredPersonsAType
 */
class ERVInsuredPersonsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[] $person
     */
    private $person = [
        
    ];

    public function __construct(array $person = null)
    {
        $this->person = $person;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType $person
     */
    public function addToPerson(\Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[] $person
     * @return self
     */
    public function setPerson(array $person)
    {
        $this->person = $person;
        return $this;
    }
}

