<?php

spl_autoload_register();

class SavingAccount extends BankAccount
{
    private $_amount;

    public function getInterest()
    {
        return $this->_amount * 0.0012;
    }

}

?>