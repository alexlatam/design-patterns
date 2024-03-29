<?php

use DecoratorTwo\Coffee;
use DecoratorTwo\WithMilk;
use DecoratorTwo\WithCanola;

require_once __DIR__ . '/vendor/autoload.php';

// Obtenemos el precio de un servicio basico
$coffee = new Coffee();
echo $coffee->getPrice();
echo $coffee->getDescription();

// Obtenemos el precio de un cafe + leche
$car_service = new WithMilk($coffee);
echo $car_service->getPrice();
echo $coffee->getDescription();

// Obtenemos el precio de un cafe + canela
$car_service = new WithCanola($coffee);
echo $car_service->getPrice();
echo $coffee->getDescription();

// Obtenemos el precio de un cafe + leche + canela
$car_service = new WithCanola(new WithMilk($coffee));
echo $car_service->getPrice();
echo $coffee->getDescription();

/**
 * Como se puede ver, este patron nos permite agregar funcionalidad a un objeto sin tener que modificarlo.
 * Agregamos funcionalidad a un objeto envolviendolo en otro objeto.
 * Los decoradores deben implementar la misma interfaz que la clase que van a decorar.
 */