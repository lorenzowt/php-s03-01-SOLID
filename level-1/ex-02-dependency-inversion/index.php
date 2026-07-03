<?php 
require_once __DIR__ . '/classes/PaymentProcessor.php';
require_once __DIR__ . '/classes/PaymentGateway.php';
require_once __DIR__ . '/classes/BankTransferPaymentGateway.php';
require_once __DIR__ . '/classes/PayPalPaymentGateway.php';
require_once __DIR__ . '/classes/StripePaymentGateway.php';

$paymentServices = [
    new PaymentProcessor(new PayPalPaymentGateway()),
    new PaymentProcessor(new BankTransferPaymentGateway()),
    new PaymentProcessor(new StripePaymentGateway())
];

foreach($paymentServices as $paymentService) {
    echo $paymentService->processPayment(20) . "\n";
}
