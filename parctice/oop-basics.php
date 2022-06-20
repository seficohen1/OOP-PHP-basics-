<?php

// defining a base class
class Car {
  public function __construct(string $brandType, string $engine, string $color)
  {
    $this->brandType = $brandType;
    $this->engine = $engine;
    $this->color = $color;
  }

  public $isSUV = false;

  function startCar() {
    echo 'Car is starting';
  }

  function driveCar() {
    echo 'Car is driving';
  }

  function stopCar() {
    echo 'Car has stopped';
  }


  function __destruct()
  {
    echo 'destructing car';
  }
}

//  defining a class that inherits Car class having new and overriden porperties and mothods
class Lamborghini extends Car {
  function __construct(string $brandType, string $engine, string $color, bool $isLuxary)
  {
    parent::__construct($brandType, $engine, $color);
    $this->isLuxary = $isLuxary;
  }

  public function horn() {
    echo 'beeeeep - but in classy way';
  }

  public function startCar()
  {
    echo 'vvooooom voooommm';
  }

  static $carPlate = '775-558-457';

  public $isSUV = true;

}