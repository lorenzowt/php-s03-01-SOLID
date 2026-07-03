<?php 

require_once 'PaymentGateway.php';
require_once 'BankTransferPaymentGateway.php';
require_once 'PayPalPaymentGateway.php';
require_once 'StripePaymentGateway.php';

class PaymentProcessor 
{
    protected PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount): string 
    {
        return $this->gateway->sendPayment($amount);
    }
}
