<?php

namespace DelegateVerify;

use Closure;

interface IOrderModel
{
    public function save(Order $order, Closure $insertCallback, Closure $updateCallback);

    public function delete(Closure $predicate);
}
