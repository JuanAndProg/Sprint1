<?php
abstract class Shape {
    private $width;
    private $height;
  
    public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
    }
    abstract function getArea();
  }
?>  