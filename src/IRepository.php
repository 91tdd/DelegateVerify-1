<?php

namespace DelegateVerify;

interface IRepository
{
    public function isExist(Order $order);

    public function insert(Order $order);

    public function update(Order $order);
}
