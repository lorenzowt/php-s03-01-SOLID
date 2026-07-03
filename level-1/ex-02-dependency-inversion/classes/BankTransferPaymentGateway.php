<?php 
require_once 'PaymentGateway.php';

class BankTransferPaymentGateway implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount}€ bank transfer done";
    }
}