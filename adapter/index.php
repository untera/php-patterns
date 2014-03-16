<?php

require_once 'PaymentAdapterInterface.php';

require_once 'PayPal.php';
require_once 'CreditCard.php';

require_once 'PayPalAdapter.php';
require_once 'CreditCardAdapter.php';


$paypal = new PayPal('customer@aol.com', 'password');
$cc = new CreditCard(1234567890123456, "09/12");


$paypalAdapter = new PayPalAdapter($paypal);
$ccAdapter = new CreditCardAdapter($cc);

var_dump($paypalAdapter->collectMoney(50));
var_dump($ccAdapter->collectMoney(50));
