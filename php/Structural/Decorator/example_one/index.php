<?php

use DecoratorOne\Coffee;
use DecoratorOne\WithMilk;
use DecoratorOne\WithCanola;

require_once __DIR__ . '/vendor/autoload.php';

// Obtenemos el precio de un servicio basico
$car_service = new Coffee();
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + cambio de aceite
$car_service = new WithMilk($car_service);
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + rotacion de llantas
$car_service = new WithCanola($car_service);
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + cambio de aceite + rotacion de llantas
$car_service = new WithCanola(new WithMilk(new Coffee($car_service)));
echo $car_service->getCost();

/**
 * Como se puede ver, este patron nos permite agregar funcionalidad a un objeto sin tener que modificarlo.
 * Agregamos funcionalidad a un objeto envolviendolo en otro objeto.
 */