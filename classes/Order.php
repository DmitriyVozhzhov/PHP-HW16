<?php

class Order
{
    use Logging;

    private string $orderNumber;

    public function __construct(string $orderNumber) {
        $this->setOrderNumber($orderNumber);
    }

    public function getOrderNumber(): string {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): void {
        $this->orderNumber = $orderNumber;
    }
}