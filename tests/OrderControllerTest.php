<?php

namespace Tests\DelegateVerify;

use Mockery as m;
use DelegateVerify\Order;
use DelegateVerify\IOrderModel;
use PHPUnit\Framework\TestCase;
use DelegateVerify\OrderController;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class OrderControllerTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    /** @test */
    public function exist_order_should_update()
    {
        // TODO
        $model = m::mock(IOrderModel::class);
        $orderController = new OrderController($model);

        $orderController->save(new Order(91, 100));
    }

    /** @test */
    public function no_exist_order_should_insert()
    {
        // TODO
        $model = m::mock(IOrderModel::class);
        $orderController = new OrderController($model);

        $orderController->save(new Order(91, 100));
    }

    /** @test */
    public function verify_lambda_function_of_delete()
    {
        // TODO
        $model = m::mock(IOrderModel::class);
        $orderController = new OrderController($model);

        $orderController->deleteAmountMoreThan100();
    }
}
