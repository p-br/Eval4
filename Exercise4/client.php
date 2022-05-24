<?php

spl_autoload_register();

$simonAccount = new ProfessionalAccount('12345678', 2);
$lucasAccount = new SavingAccount('23456781', 345);
$hafsaAccount = new SavingAccount('34567812', 234223432);


echo "<h2>Simon's account</h2>" . $simonAccount;

echo "<h2>Lucas' account</h2>" . $lucasAccount;


echo $hafsaAccount->getInterest();



?>
