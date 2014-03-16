<?php
interface PaymentAdapterInterface
{
    /**
     * @param $amount
     * @return boolean
     */
    public function collectMoney($amount);
}
