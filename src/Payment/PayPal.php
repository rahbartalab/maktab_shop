<?php

namespace Payment;

class PayPal implements Payment
{

    function pay(): string
    {
        return 'redirect to paypal site';
    }
}