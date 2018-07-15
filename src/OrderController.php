<?php

namespace DelegateVerify;

class OrderController
{
    private $orderModel;

    public function __construct(IOrderModel $orderModel)
    {
        $this->orderModel = $orderModel;
    }

    public function save(Order $order)
    {
        $this->orderModel->save($order, function ($order) {
            $this->insertMessage($order);
        }, function ($order) {
            $this->updateMessage($order);
        });
    }

    public function deleteAmountMoreThan100()
    {
        $this->orderModel->delete(function ($order) {
            return $order->amount > 100;
        });
    }

    private function updateMessage(Order $order)
    {
        echo sprintf('update order id:%s with %s successfully!', $order->id, $order->amount);
    }

    private function insertMessage(Order $order)
    {
        echo sprintf('insert order id:%s with %s successfully!', $order->id, $order->amount);
    }
}
