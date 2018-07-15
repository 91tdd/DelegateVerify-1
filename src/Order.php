<?php

namespace DelegateVerify;

class Order
{
    public $id;

    public $amount;

    public function __construct($id = null, $amount = null)
    {
        $this->id = $id;
        $this->amount = $amount;
    }
}
