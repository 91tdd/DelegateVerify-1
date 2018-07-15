<?php

namespace DelegateVerify;

use Closure;
use DateTime;

class MyOrderModel implements IOrderModel
{
    private $repository;

    public function __construct(IRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save(Order $order, Closure $insertCallback, Closure $updateCallback)
    {
        if (! $this->repository->isExists($order)) {
            $now = new DateTime('now');
            if ($now->format('w') === '0') {
                $order->amount += 100;
            }

            $this->repository->insert($order);
            $insertCallback($order);
        } else {
            $this->repository->update($order);
            $updateCallback($order);
        }
    }

    public function delete(Closure $predicate)
    {
        throw new Exception('Not implemented');
    }
}
