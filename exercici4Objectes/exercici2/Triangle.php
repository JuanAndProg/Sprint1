<?php

class Triangle extends Shape {
  public function __construct($width, $height){
    parent::__construct($width,$height);
  }
public function getArea() {
    return ($this->width * $this->height) / 2;
  }
}

?>