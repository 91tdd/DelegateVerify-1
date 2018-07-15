<?php

namespace Tests\DelegateVerify;

use Mockery as m;
use DelegateVerify\IRepository;
use PHPUnit\Framework\TestCase;
use DelegateVerify\MyOrderModel;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class OrderModelTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = m::mock(IRepository::class);
    }

    /** @test */
    public function insert_order()
    {
        // TODO
        $myOrderModel = new MyOrderModel($this->repository);
    }

    /** @test */
    public function update_order()
    {
        // TODO
        $myOrderModel = new MyOrderModel($this->repository);
    }
}
