<?php

namespace App\Controllers;

class Controller {
  protected $container;

  public function __construct($container) {
    $this->container = $container;
  }

  public function __get($property) {
    // sloppy prototype
    if ($this->container->{$property}) {
      return $this->container->{$property};
    }
  }
}
