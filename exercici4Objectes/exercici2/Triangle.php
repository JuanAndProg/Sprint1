<?php
class Triangle extends Shape {
    private $base;
    private $height;
  
    public function __construct($base, $height){
      $this->base = $base;
      $this->height = $height;
    }
  
    public function area() {
      return ($this->base * $this->height) / 2;
    }
  }
?>