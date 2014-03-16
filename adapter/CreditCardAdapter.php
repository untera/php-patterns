<?php
class CreditCardAdapter implements PaymentAdapterInterface
{
    private $creditCard;

    public function __construct($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function collectMoney($amount)
    {
        $result = $this->creditCard->authorizeTransaction($amount);
        return strpos($result, 'Authorization') === 0;
    }
}