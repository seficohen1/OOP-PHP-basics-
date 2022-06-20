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