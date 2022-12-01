<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType;

/**
 * Class representing PossiblePaymentsMethodsAType
 */
class PossiblePaymentsMethodsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[] $option
     */
    private $option = [
        
    ];

    public function __construct(array $option = null)
    {
        $this->option = $option;
    }

    /**
     * Adds as option
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType $option
     */
    public function addToOption(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType $option)
    {
        $this->option[] = $option;
        return $this;
    }

    /**
     * isset option
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOption($index)
    {
        return isset($this->option[$index]);
    }

    /**
     * unset option
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOption($index)
    {
        unset($this->option[$index]);
    }

    /**
     * Gets as option
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Sets a new option
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType\OptionAType[] $option
     * @return self
     */
    public function setOption(array $option)
    {
        $this->option = $option;
        return $this;
    }
}

