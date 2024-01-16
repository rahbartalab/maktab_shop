<?php

namespace Payment;

class Bitcoin implements Payment
{
    public function pay() : string
    {
        return 'payment by bitcoin';
    }
}