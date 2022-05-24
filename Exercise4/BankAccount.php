<?php

spl_autoload_register();

abstract class BankAccount
{
    private $_accountNbr;
    private $_amount;


    // constructor
    public function __construct($nbr, $amount)
    {
        // 'this' keyword refers to the object itself.
        // 'this->color' refers to property color of the object.
        $this->_accountNbr = $nbr;
        $this->_amount = $amount;
    }

    // setters
    public function setAccountNbr($nbr)
    {
        if (strlen($nbr) == 8)
            $this->_accountNbr = $nbr;
        else
            echo "Account number must be 8 characters long";
    }

    public function setAmount($amount)
    {
        if (is_numeric($amount))
            $this->_amount = $amount;
        else
            echo "Amount must be numeric";
    }

    // getters
    public function getAccountNbr()
    {
        return $this->_accountNbr;
    }

    public function getAmount()
    {
        return $this->_amount;
    }

    // withdraw method (if enough bank balance)
    public function withdraw($withdrawAmount)
    {
        if ($this->_amount >= $withdrawAmount)
            $this->_amount = $this->_amount - $withdrawAmount;
        else
            echo "Your bank balance is insufficient";
    }

    // deposit method
    public function deposit($depositAmount)
    {
        $this->_amount = $this->_amount + $depositAmount;
    }


    // convert to string
    public function __toString()
    {
        return "<p><h4>" . get_called_class() . "</h4>" . "<strong>Account number : </strong>" . $this->_accountNbr . "<br><strong>Account balance : </strong>" . $this->_amount . " €</p><hr>";
    }
}
