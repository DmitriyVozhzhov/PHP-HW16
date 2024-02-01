<?php

declare(strict_types=1);

require_once './classes/Logging.php';
require_once './classes/Order.php';
require_once './classes/User.php';

try {
    $user = new User("John Doe");
    $user->logMessage("User created: " . $user->getUsername());

    $order = new Order("123000");
    $order->logMessage("Order placed: " . $order->getOrderNumber());
} catch (Exception $e){
   echo "Помилка: " . $e->getMessage();
}