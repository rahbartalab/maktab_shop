<?php

namespace Payment;

class Wallet implements Payment
{

    function pay(): string
    {
      return 'payment by wallet';
    }
}